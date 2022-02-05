@extends('frontend.frontend_master')

@section('title')
    ScooterLux - Checkout Page
@endsection

@section('frontend_content')
 <div class="container">
    <div class="checkout-box ">
        <div class="row">
            <div class="col-md-8">
                <div class="panel-group checkout-steps" id="accordion">
                    <!-- checkout-step-01  -->
                    <div class="panel panel-default checkout-step-01">

                        <div id="collapseOne" class="panel-collapse collapse in">
                            <!-- panel-body  -->
                            <div class="panel-body">
                                <div class="row">

                                    <!-- guest-login -->
                                    <div class="col-md-6 col-sm-6 already-registered-login">
                                        <h4 class="checkout-subtitle"><b>Shipping Address</b></h4>

                                        <form class="shipping-form" method="POST" action="{{ route('checkout.store') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label class="info-title" for="shippingName">Shipping
                                                    Name<span>*</span></label>
                                                <input type="text" class="form-control unicase-form-control text-input"
                                                    id="shippingName" placeholder="Enter your name here"
                                                    name="shipping_name" value="{{ Auth::user()->name }}">
                                                    @error('shipping_name')
                                                        <span class="alert text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="shippingEmail">Shipping email
                                                    <span>*</span></label>
                                                <input type="email" class="form-control unicase-form-control text-input"
                                                    id="shippingEmail" placeholder="Enter your email here"
                                                    name="shipping_email" value="{{ Auth::user()->email }}">
                                                    @error('shipping_email')
                                                        <span class="alert text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="shippingPhone">Shipping
                                                    Phone<span>*</span></label>
                                                <input type="phone" class="form-control unicase-form-control text-input"
                                                    id="shippingPhone" placeholder="Enter your phone number"
                                                    name="shipping_phone" value="{{ Auth::user()->phone_number }}">
                                                    @error('shipping_phone')
                                                        <span class="alert text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="info-title" for="shippingPostCode">Shipping Post
                                                    Code<span>*</span></label>
                                                <input type="text" class="form-control unicase-form-control text-input"
                                                    id="shippingPostCode" placeholder="Enter your name here"
                                                    name="shipping_postCode">
                                                    @error('shipping_postCode')
                                                        <span class="alert text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>
                                    </div>
                                    <!-- guest-login -->

                                    <!-- already-registered-login -->
                                    <div class="col-md-6 col-sm-6 already-registered-login">
                                        <h4 class="checkout-subtitle"><b>Address Bar</b></h4>

                                        <div class="form-group">
                                            <h5>Select Country <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select class="custom-select form-control unicase-form-control" aria-label="Country Select" name="country">
                                                    <option value="" selected>Select Country</option>
                                                   
                                                    <option value="Nigeria" selected>Nigeria</option>
                                                </select>
                                            </div>
                                            @error('country')
                                                <span class="alert text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <h5>State Select <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select class="custom-select form-control unicase-form-control" aria-label="District Select" name="state_id">
                                                    <option selected="" disabled="">Select State</option>
                                                    @foreach ($states as $state)
                                                    <option value="{{ $state->id }}">
                                                        {{ $state->name }}</option>
                                                @endforeach
                                                </select>
                                               
                                            </div>
                                            @error('state_id')
                                                <span class="alert text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <h5>LGA Select <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select class="custom-select form-control unicase-form-control" aria-label="State Select" name="lga_id" id="lga">
                                                    <option selected="" disabled="">Select LGA</option>
                                                </select>
                                            </div>
                                            @error('lga_id')
                                                <span class="alert text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>  
                                    </div>

                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label class="info-title" for="shippingAddrees">Shipping
                                                Addres<span>*</span></label>
                                            <textarea name="shipping_address" id="" cols="30" rows="5"
                                                class="form-control unicase-form-control text-input" id="shippingAddrees"
                                                placeholder="Example: H#05,R#02, Uttara Sector: 11, Uttara"></textarea>
                                                @error('shipping_address')
                                                    <span class="alert text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                       </div>

                                       <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                        <label class="info-title" for="shippingNotes">Shipping Notes<span></span></label>
                                        <textarea name="shipping_notes" id="" cols="30" rows="5" class="form-control unicase-form-control text-input" id="shippingNotes" placeholder="any Shipping notes"></textarea>
                                    </div>
                                       </div>
                                    <!-- already-registered-login -->
                                </div>
                            </div>
                            <!-- panel-body  -->

                        </div><!-- row -->
                    </div>
                    <!-- checkout-step-01  -->

                </div><!-- /.checkout-steps -->
            </div>
            <div class="col-md-4">
                <!-- checkout-progress-sidebar -->
                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
                            </div>
                            <div class="___class_+?71___">
                                <ul class="nav nav-checkout-progress list-unstyled">
                                    @foreach ($carts as $item)
                                        <li>
                                            <strong>Image: </strong>
                                            <img src="{{ asset($item->options->image) }}"
                                                style="height: 50px; width: 50px;" alt="">
                                        </li>
                                        <li>
                                            <strong>Qty:</strong>
                                            {{ $item->qty }}
                                            {{-- <strong>Color:</strong>
                                            {{ $item->options->color }}
                                            <strong>Size:</strong>
                                            {{ $item->options->size }}
                                        </li> --}}
                                    @endforeach
                                    <hr>
                                    <li>
                                        @if (Session::has('coupon'))
                                            <strong>SubTotal: </strong> &#8358;{{ $cart_total }}
                                            <hr>
                                            <strong>Coupon Name: </strong> {{ session()->get('coupon')['coupon_name'] }}
                                            ( {{ session()->get('coupon')['coupon_discount'] }} %)
                                            <hr>
                                            <strong>Coupon Discount:
                                            </strong>(-)&#8358;{{ session()->get('coupon')['discount_amount'] }}
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

                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        {{-- <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">Select Payment Method</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Paystack</label>
                                    <input type="radio" name="payment_method" id="" value="paystack" >
                                    <img src="{{ asset('frontend/assets/images/payments/paystack.png') }}" alt="">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Shop</label>
                                    <input type="radio" name="payment_method" id="" value="card">
                                    <img src="{{ asset('frontend/assets/images/payments/paystack.png') }}" alt="">
                                </div>
                            
                                @error('payment_method')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div> --}}
                        <hr>
              <button type="submit" class="btn btn-primary checkout-page-button btn-block"><b>Confirm Order</b>
            </button>
                    </div>
                </div>
            </div>
            
            </form>
        </div><!-- /.row -->
    </div>
 </div>
@section('frontend_script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $('select[name="state_id"]').on('change', function(){
                var state_id = $(this).val();
                $.ajax({
                    url: "{{ route('get-lga') }}",
                    type: "POST",
                    data: {
                        state_id: state_id
                    },
                    success: function(data) {
                        $('#lga').empty();
                        $.each(data.lga, function(index,
                        lga) {
                            $('#lga').append('<option value="' + lga
                                .id + '">' + lga.name + '</option>');
                        })
                        // console.log(data);
                    }
                })
            });
        });
    </script>
@endsection
@endsection
