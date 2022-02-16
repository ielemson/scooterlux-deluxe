 <!-- Single Product Details Area -->
 <section class="single_product_details_area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                        <!-- Carousel Inner -->
                        <div class="carousel-inner">
                            @foreach($product->images as $key => $img)
                            <div class="carousel-item {{$key == 0 ? 'active': ''}}">
                                <a class="gallery_img" href="{{ asset($img->photo_name ) }}" title="{{$product->product_name_en  }}">
                                    <img class="d-block w-100" src="{{ asset($img->photo_name ) }}" alt="{{ $product->product_name_en  }}">
                                </a>
                            </div>
                            @endforeach
                        </div>

                        <!-- Carosel Indicators -->
                        <ol class="carousel-indicators">
                            @foreach($product->images as $key => $img)
                            <li class="{{$key == 0 ? 'active':''}}" data-target="#product_details_slider" data-slide-to="{{$key}}" style="background-image: url({{ asset($img->photo_name ) }})">
                            </li>
                           
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Single Product Description -->
            <div class="col-12 col-lg-6">
                <div class="single_product_desc">
                    <h4 class="title mb-2"> {{ $product->product_name_en }}</h4>
                   
                    <h4 class="price mb-4">
                        @php
                            $price  = $product->selling_price 
                        @endphp
                        @money($price,'NGN')
                        {{-- <span>$190</span></h4> --}}

                    <!-- Overview -->
                    <div class="short_overview mb-4">
                        <h6 class="mt-5">Overview</h6>
                        <p>
                            {!! $product->short_description_en !!}
                        </p>
                    </div>
                    <!-- Add to Cart Form -->
                    {{-- <div class="cart clearfix my-5 d-flex flex-wrap align-items-center">
                        <div class="quantity">
                            <input type="number" class="qty-text form-control" id="product_qty" step="1" value="1" min="1">
                        </div>
              
                        <input type="hidden" name="" id="product_id" value="{{ $product->id }}" min="1">
                        <button type="submit" class="btn btn-primary mt-1 mt-md-0 ml-1 ml-md-3 btn-sm" onclick="addToCart()">
                            <i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</button>
                    </div> 
                      --}}

                      <div class="quickview_body">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-12 col-lg-7">
                                   
                                    <!-- Add to Cart Form -->
                                    <div class="cart">
                                        <div class="quantity">
                                            <input type="number" class="qty-text form-control input-sm" id="product_qty" step="1" value="1" min="1">
                                        </div>
                                        <input type="hidden" name="" id="product_id" value="{{ $product->id }}" min="1">
                        <button type="submit" class="btn btn-primary mt-1 mt-md-0 ml-1 ml-md-3 btn-md" onclick="addToCart()">
                            <i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</button>
                                        <!-- Wishlist -->
                                        <div class="modal_pro_wishlist">
                                            <a href="wishlist.html"><i class="icofont-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="modal_pro_compare">
                                            <a href="compare.html"><i class="icofont-exchange"></i></a>
                                        </div>
                                    </div>
                                    <!-- Share -->
                                    <div class="share_wf mt-30">
                                        <p>Share with friends</p>
                                        <div class="_icon">
                                            <a href="https://www.facebook.com/sharer/sharer.php?scooterlux.com/product/detail/{{$product->id}}/{{$product->product_slug_en}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            {{-- <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a> --}}
                                            {{-- <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> --}}
                                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            {{-- <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_details_tab section_padding_100_0 clearfix">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs" role="tablist" id="product-details-tab">
                        <li class="nav-item">
                            <a href="#description" class="nav-link active" data-toggle="tab" role="tab">Description</a>
                        </li>
                     
                        <li class="nav-item">
                            <a href="#addi-info" class="nav-link" data-toggle="tab" role="tab">Shipping Information</a>
                        </li>
                     
                    </ul>
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="description">
                            <div class="description_area">
                                <h5>Description</h5>
                               {!! $product->long_description_en !!}
                             </div>
                        </div>

                     
                        <div role="tabpanel" class="tab-pane fade" id="addi-info">
                            <div class="additional_info_area">
                                <h5>Shipping Info</h5>
                                <p>What should I do if I receive a damaged parcel?
                               
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="refund">
                            <div class="refund_area">
                                <h6>Return Policy</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa quidem, eos eius laboriosam voluptates totam mollitia repellat rem voluptate obcaecati quas fuga similique impedit cupiditate vitae repudiandae. Rem, tenetur placeat!</p>

                                <h6>Return Criteria</h6>
                                <ul class="mb-30 ml-30">
                                    <li><i class="icofont-check"></i> Package broken</li>
                                    <li><i class="icofont-check"></i> Physical damage in the product</li>
                                    <li><i class="icofont-check"></i> Software/hardware problem</li>
                                    <li><i class="icofont-check"></i> Accessories missing or damaged etc.</li>
                                </ul>

                                <h6>Q. What should I do if I receive a damaged parcel?</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit impedit similique qui, itaque delectus labore.</p>

                                <h6>Q. I have received my order but the wrong item was delivered to me.</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis quam voluptatum beatae harum tempore, ab?</p>

                                <h6>Q. Product Receipt and Acceptance Confirmation Process</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ducimus, temporibus soluta impedit minus rerum?</p>

                                <h6>Q. How do I cancel my order?</h6>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eius eum, minima!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Single Product Details Area End -->