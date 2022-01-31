@extends('frontend.frontend_master')

@section('title')
   ScooterLux - Paystack Page
@endsection



@section('frontend_content')
    <div class="checkout-box">
        <div class="row">
            <div class="col-md-12">
                <!-- checkout-progress-sidebar -->
                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">Your Shopping Amount</h4>
                            </div>
                            <div class="">
                                <ul class="nav nav-checkout-progress list-unstyled">
                                    <hr>
                                    <li>
                                        @if (Session::has('coupon'))
                                            <strong>SubTotal: </strong> &#8358;{{ $cart_total }}
                                            <hr>
                                            <strong>Coupon Name: </strong> {{ session()->get('coupon')['coupon_name'] }}
                                            ( {{ session()->get('coupon')['coupon_discount'] }} %)
                                            <hr>
                                            <strong>Coupon Discount:
                                            </strong>(-)${{ session()->get('coupon')['discount_amount'] }}
                                            <hr>
                                            <strong>Grand Total: </strong>${{ session()->get('coupon')['total_amount'] }}
                                            <hr>
                                        @else
                                            <strong>SubTotal: </strong> 
                                            @php
                                                $amounts = $cart_total
                                            @endphp
                                            @money($amounts, 'NGN')
                                            <hr>
                                            <strong>Grand Total: </strong> 
                                             @money($amounts, 'NGN')
                                            <hr>
                                        @endif

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- checkout-progress-sidebar -->
            </div>
            <div class="col-md-12">
                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal d-none" role="form">
                            @csrf
                            <div class="form-row">
                              <label for="card-element">
                  
                            <input type="hidden" name="metadata" value="{{ json_encode($array = [
                                'buyer_user_id' =>  Auth::user()->id, 
                                'buyer_user_email' => Auth::user()->email, 
                                'shipping_name'=>$data['shipping_name'],
                                'shipping_email'=>$data['shipping_email'],
                                'shipping_phone'=>$data['shipping_phone'],
                                'shipping_postCode'=>$data['shipping_postCode'],
                                'country'=>$data['country'],
                                'state_id'=>$data['state_id'],
                                'lga_id'=>$data['lga_id'],
                                'shipping_address'=>$data['shipping_address'],
                                'shipping_notes'=>$data['shipping_notes'],
                                "cancel_action" => "http://127.0.0.1:8000/checkout-page"
                                ]) }}">
                                    
                            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}

                            <input type="hidden" name="amount" value="{{$cart_total * 100}}"> {{-- required in kobo --}}
                                 
                            <input type="hidden" name="currency" value="NGN">
                                    
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> 

                            <button class="btn btn-success btn-lg btn-block" type="submit">
                                <b>Pay With </b>
                               <img src="{{ asset('frontend/assets/images/payments/paystack-logo.png') }}" width="100"/>   
                             </button>
                          </form>
                    </div>
                </div>
            </div>
            </div>
            <hr>
        </div>
    </div>
@endsection

