<section class="section wow fadeInUp new-arriavls">
    <h3 class="section-title">
        New Arrivals
    </h3>
   
    <div class="shell">
        <div class="container">
          <div class="row">
            @foreach ($new_products as $product)
            <div class="col-md-3">
              <div class="wsk-cp-product">
                <div class="wsk-cp-img">
                  <img src="{{ asset($product->product_thumbnail) }}" alt="Product" class="img-responsive" />
                </div>
                <div class="wsk-cp-text">
                  <div class="category">
                    <span>
                        <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en]) }}" style="color: #fff; font-weight:bold">
                            View
                        </a>
                    </span>
                  </div>
                  <div class="title-product">
                    <h3 id="pname">{{ $product->product_name_en }}</h3>
                  </div>
                  {{-- <div class="description-prod">
                    <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                  </div> --}}
                  <div class="card-footer">
                    <div class="wcf-left"><span class="price">
                        @php
                        $price = $product->selling_price;
                        @endphp
                        @money($price, 'NGN')    
                    </span>
                    </div>
                    <div class="wcf-right">
                        
                        {{-- <a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i> --}}
                            <div class="col-sm-7">
                                <input type="hidden" name="" id="product_id" value="{{ $product->id }}" min="1">
                                <button type="submit" class="buy-btn" onclick="addToCart()">
                                    <i class="zmdi zmdi-shopping-basket"></i></button>
                            </div>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         @endforeach
          
        </div>
      </div>
</section>
<!-- /.section -->
@push('styles')
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/card.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'><link rel="stylesheet" href="./style.css">

@endpush