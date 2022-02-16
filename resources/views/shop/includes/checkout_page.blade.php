
        <!-- Blog Area -->
        <section class="blog_area section_padding_100">
      
    <div class="container wow fadeIn">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

            <div class="checkout_area">
                <div class="container">
                    <div>
                        <div class="col-12">
                            <div class="checkout_details_area clearfix">
                                <h5 class="mb-4">Billing Details</h5>
                                <form class="shipping-form" method="POST" action="{{ route('checkout.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="first_name">Shipping Name</label>
                                            <input type="text" class="form-control" id="shipping_name" name="shipping_name" placeholder="Shipping Name" value="{{ Auth::user()->name }}" required>
                                            @error('shipping_name')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="last_name">Shipping Email</label>
                                            <input type="email" class="form-control" id="shipping_email" name="shipping_email" placeholder="shipping_email Email" value="{{ Auth::user()->email }}"  required>
                                            @error('shipping_email')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="company">Shipping Phone</label>
                                            <input type="text" class="form-control" id="shipping_phone" placeholder="Shipping Phone" name="shipping_phone"  value="{{ Auth::user()->phone_number }}"  required>
                                            @error('shipping_phone')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                       
                                        <div class="col-md-6 mb-3">
                                            <label for="company">Country</label>
                                            <input type="text" class="form-control" id="country" placeholder="COuntry" name="country" value="Nigeria" required>
                                            @error('country')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                       
                                        <div class="col-md-6 mb-3">
                                            <label for="street_address">Select State</label>
                                            <select class="custom-select d-block w-100 form-control" id="ship-country" name="state_id" required>
                                                <option selected="" disabled="">Select State</option>
                                                @foreach ($states as $state)
                                                <option value="{{ $state->id }}">
                                                    {{ $state->name }}</option>
                                            @endforeach
                                            </select>
                                            @error('state_id')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="street_address">Select LGA</label>
                                            <select class="custom-select d-block w-100 form-control" aria-label="State Select" name="lga_id" id="lga" required>
                                                <option selected="" disabled="">Select LGA</option>
                                            </select>
                                            @error('lga_id')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <label for="order-notes">Order Address</label>
                                            <textarea class="form-control" id="order-notes"  placeholder="Your Shipping address with a landmark"  name="shipping_address" required>{{old('shipping_address')}}</textarea>
                                            @error('shipping_address')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label for="order-notes">Order Notes</label>
                                            <textarea class="form-control" id="order-notes" name="shipping_notes" placeholder="Notes about your order, e.g. special notes for delivery.">{{old('shipping_notes')}}</textarea>
                                        </div>
                                        <div class="col-md-12">
                                            
                                            <div class="card p-2 mt-50">
                                                <div class="input-group">
                                                  {{-- <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2"> --}}
                                                    <button class="btn btn-success btn-sm waves-effect m-0 btn-block" type="submit">Confirm Order</button>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">{{$cart_qty}}</span>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">
            @foreach ($carts as $item)
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">{{$item->name}}</h6>
                <img src="{{ asset($item->options->image) }}"
                style="height: 50px; width: 50px;" alt="">
              </div>
              <span class="text-muted">
                @php
                $amount = $item->price
                @endphp
                @money($amount, 'NGN')
              </span>
            </li>
           @endforeach
           
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (NGN)</span>
              <strong>
                @php
                $amounts = $cart_total
                @endphp
                @money($amounts, 'NGN')
              </strong>
            </li>
          </ul>
          <!-- Cart -->

          <!-- Promo code -->
          <form class="card p-2">
            <div class="input-group">
              {{-- <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2"> --}}
                <a href="{{route('home')}}" class="btn btn-primary btn-sm waves-effect m-0 btn-block" type="button">Continue Shopping</a>
            </div>
          </form>
          <!-- Promo code -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
 
    </section>

  @push('customjs')
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
  @endpush()
   
