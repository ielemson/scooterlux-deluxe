@extends('shop.layout.master')


@section('content')
       <!-- Preloader -->
       <div id="preloader">
        <div class="spinner-grow" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Header Area -->
    @include('shop.includes.header')
    <!-- Header Area End -->

       <!-- Breadcumb Area -->
       <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>Product Details</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Payment</a></li>
                        <li class="breadcrumb-item active"> Pay Stack</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->
  <!-- Shortcode Area -->
  <div class="shortcodes_area section_padding_50">
    <div class="container">
        <!-- Shortcodes Content -->
        <div class="row">
            <div class="col-12">
                <!-- Shortcodes Title -->
                <div class="shortcodes_title mb-30">
                    <h5>Your Shopping Amount</h5>
                    <p>Make your payment</p>
                </div>

                <!-- +++++++++++
                Bootstrap’s Form
                ++++++++++++ -->
                <div class="shortcodes_content">
                    <ul class="list-group">
                        {{-- <li class="list-group-item">Critical analysis and evaluation of a prescribed text; no related texts are required.</li> --}}
                        <li  class="list-group-item">
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

                    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                        @csrf
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

                        <button class="btn btn-success btn-md mt-5 btn-block" type="submit">
                            <b>Pay With </b>
                           <img src="{{ asset('frontend/assets/images/payments/paystack-logo.png') }}" width="100"/>   
                         </button>
                    </form>
                    
                </div>
               
                
            </div>
        </div>
    </div>
</div>
<!-- Shortcode Area End -->
   
@endsection