<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Paystack;

class PaymentController extends Controller
{

    
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // dd($paymentDetails);


        if($paymentDetails['data']['status'] != 'success'){
            
            $data = ['id'=> $paymentDetails['data']['metadata']['order_id']];

            Order::where('id',$data)->delete();

            $notification = [
                'message' => 'Payment Failed.Try again',
                'alert-type' => 'error'
            ];
            return redirect()->route('checkout-page')->with($notification);
        }



        if($paymentDetails['data']['status'] == 'success'){
            
     
            $order = Order::create([
                'user_id' => Auth::id(),
                'country' => $paymentDetails['data']['metadata']['country'],
                'state_id' => $paymentDetails['data']['metadata']['state_id'],
                'lga_id' => $paymentDetails['data']['metadata']['lga_id'],
                'shipping_name' => $paymentDetails['data']['metadata']['shipping_name'],
                'shipping_email' => $paymentDetails['data']['metadata']['shipping_email'],
                'shipping_phone' => $paymentDetails['data']['metadata']['shipping_phone'],
                'post_code' => $paymentDetails['data']['metadata']['shipping_postCode'],
                'notes' => $paymentDetails['data']['metadata']['shipping_notes'],
                'address' => $paymentDetails['data']['metadata']['shipping_address'],
                'payment_type' => 'card',
                'payment_status' => 'paid',
                'payment_method' => 'Paytack',
                'transaction_id' => mt_rand(0,123456),
                'currency' => 'NGN',
                'amount' => $paymentDetails['data']['amount']/100,
                'order_number' => mt_rand(0,123456),
                'invoice_number' => 'SCLUX'.mt_rand(10000000,99999999),
                'order_date' => Carbon::now()->format('d F Y'),
                'order_month' => Carbon::now()->format('F'),
                'order_year' => Carbon::now()->format('Y'),
                'status' => 'pending',
                'created_at' => Carbon::now(),
                    ]);

                    // Cart Service Area
                    $carts = Cart::content();
                    foreach ($carts as $cart) {
                        OrderItem::create([
                            'order_id' => $order->id,
                            'product_id' => $cart->id,
                            'color' => 'black',
                            'size' => 'size',
                            'qty' => $cart->qty,
                            'unit_price' => $cart->price,
                        ]);
                    }     
                    // After OrderItem Store forget coupon
                    if(Session::has('coupon')){
                        Session::forget('coupon');
                    }

                    // Then Destroy cart
                    Cart::destroy();

                    $notification = array(
                        'message' => 'Your Order Place Successfully',
                        'alert-type' => 'success'
                    );
                    return redirect()->route('user.orders')->with($notification);
         
        }


    }
}