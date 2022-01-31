<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutStoreRequest;
use App\Models\LGA;
use App\Models\Order;
use App\Models\ShipDistrict;
use App\Models\ShipDivision;
// use App\Models\Shipping;
use App\Models\ShipState;
use App\Models\State;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
  
    public function checkoutStore(Request $request)

    {

        if(Session::has('coupon')){
            $total_amount = Session::get('coupon')['total_amount'];
        }else{
            $total_amount = round(Cart::total());
        }
        
    $request->validate(
        [ 
        'shipping_name' => 'required',
        'shipping_email' => 'required',
        'shipping_phone' => 'required',
        'shipping_postCode' => 'required',
        'country' => 'required',
        'state_id' => 'required|numeric',
        'lga_id' => 'required|numeric',
        'shipping_address' => 'required',
        'shipping_notes' => 'nullable',
        // 'payment_method' => 'required',
    ],
        [
           'state_id.required'=>'State is required',
           'lga_id.required'=>'LGA is required' 
        ]
    );

        $data = [];
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_postCode'] = $request->shipping_postCode;
        $data['country'] = $request->country;
        $data['state_id'] = $request->state_id;
        $data['lga_id'] = $request->lga_id;
        $data['shipping_address'] = $request->shipping_address;
        $data['shipping_notes'] = $request->shipping_notes;

         // Order Service Area
        //  $order = Order::create([
        //     'user_id' => Auth::id(),
        //     'country' => $request->input('country'),
        //     'state_id' => $request->input('state_id'),
        //     'lga_id' => $request->input('lga_id'),
        //     'shipping_name' => $request->input('shipping_name'),
        //     'shipping_email' => $request->input('shipping_email'),
        //     'shipping_phone' => $request->input('shipping_phone'),
        //     'post_code' => $request->input('shipping_postCode'),
        //     'notes' => $request->input('shipping_notes'),
        //     'address' => $request->input('shipping_address'),
        //     'payment_type' => 'card',
        //     'payment_status' => 'pending',
        //     'payment_method' => 'Paytack',
        //     'transaction_id' => mt_rand(0,123456),
        //     'currency' => 'NGN',
        //     'amount' => $total_amount,
        //     'order_number' => mt_rand(0,123456),
        //     'address' => $request->input('shipping_address'),
        //     'address' => $request->input('shipping_address'),
        //     'invoice_number' => 'SCLUX'.mt_rand(10000000,99999999),
        //     'order_date' => Carbon::now()->format('d F Y'),
        //     'order_month' => Carbon::now()->format('F'),
        //     'order_year' => Carbon::now()->format('Y'),
        //     'status' => 'pending',
        //     'created_at' => Carbon::now(),
        // ]);

        $carts = Cart::content();
        $cart_qty = Cart::count();
        $cart_total = Cart::total();

             return view('frontend.payment.paystack', compact(
                'cart_total',
                'carts',
                'cart_qty',
                'data',
            ));
        // $order_id = $order->id;
        // if($order){
        //     return view('frontend.payment.paystack', compact(
        //         'cart_total',
        //         'order_id'
        //     ));
        // }
        
        // elseif($request->payment_method == 'card'){
        //     return "card";
        // }else{
        //     return view('frontend.payment.cod', compact(
        //         'data',
        //         'cart_total',
        //     ));
        // }
    }

    public function getLga(Request $request)
    {
        // $lgas = LGA::where('state_id','=', $request->state_id)->orderBy('name','ASC')->get();
        // return json_encode($lgas);
        $state_id = $request->state_id;
         
        $lgas = LGA::where('state_id',$state_id)->get();
        return response()->json([
            'lga' => $lgas
        ]);
    }

    public function getState($district_id)
    {
        $states = ShipState::where('district_id','=', $district_id)->orderBy('state_name','ASC')->get();
        return json_encode($states);
    }

    public function checkoutPage()
    {
        if(Auth::check()){

            $states = State::all();
           
            if (Cart::total() > 0) {
                $carts = Cart::content();
                $cart_qty = Cart::count();
                $cart_total = Cart::total();


                $divisions = ShipDivision::with(['districts', 'states'])->latest()->get();
                //return $divisions;
                return view('frontend.checkout_page.checkout_page', compact(
                    'carts',
                    'cart_qty',
                    'cart_total',
                    'states'
                ));
            }else{
                $notification = [
                    'message' => 'Your shopping cart is empty!!',
                    'alert-type' => 'error'
                ];
                return redirect()->route('home')->with($notification);
            }
        }else{
            $notification = [
                'message' => 'You need to Login First for Checkout',
                'alert-type' => 'error'
            ];
            return redirect()->route('login')->with($notification);
        }
    }
}
