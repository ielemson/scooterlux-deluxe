<div id="products" class="section section-pad product-sec ">
    <div class="product-row pb-5 pt-5 bg-light">
      <div class="container">

          <div class="row justify-content-center">
              <div class="col-md-7 text-center">
                  <div class="comm-head">
                      <h1 class="heading-section">Awesome Product That<br>You Never Seen</h1>
                      <p>Convallis elit senectus justo dolor lorem, metus ex amet ac. Litora mattis in diam risus turpis vivamus, diam nisl lorem ligula vestibulum,</p>
                  </div>
              </div>
          </div>
          <div class="row d-flex justify-content-center text-center" >
          @foreach ($products as $product)
          <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-6">
            <div class="single-product res-m-bttm text-center round bg-white">
                <div class="product-img">
                    <img src="{{ asset($product->product_thumbnail) }}">
                </div>
                <h4>{{ $product->product_name_en }}</h4>
                <h4>&#8358;{{ $product->selling_price }}</h4>
                <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en]) }}" class="btn btn-outline">shop now </a>
            </div>
        </div>  
          @endforeach
            
          </div>
      </div>
    </div>
  </div>