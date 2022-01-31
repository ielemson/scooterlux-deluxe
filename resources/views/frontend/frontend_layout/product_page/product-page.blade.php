@extends('frontend.frontend_master')

@section('title')
ScooterLux Product
@endsection

@section('frontend_content')
    <div class="body-content outer-top-xs">
        <div class="container">
            <div class="row single-product">
               
                <div class="col-md-12">
                    <div class="detail-block">
                        <div class="row  wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                                <div class="product-item-holder size-big single-product-gallery small-gallery">


                                    <div id="owl-single-product">
                                        @foreach($product->images as $img)
                                        <div class="single-product-gallery-item" id="slide{{ $img->id }}">
                                            <a data-fancybox  data-title="Gallery" href="{{ asset($img->photo_name ) }} ">
                                            <img class="img-responsive" alt="" src="{{ asset($img->photo_name ) }} " data-echo="{{ asset($img->photo_name ) }} " />
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->
                                        @endforeach
                                    </div><!-- /.single-product-slider -->

                                  
                                    <div class="single-product-gallery-thumbs gallery-thumbs">
                                        <div id="owl-single-product-thumbnails">
                                        @foreach($product->images as $img)
                                            <div class="item">
                                                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide{{ $img->id }}">
                                                    <img class="img-responsive" width="85" alt="" src="{{ asset($img->photo_name ) }} " data-echo="{{ asset($img->photo_name ) }} " />
                                                </a>
                                            </div>
                                            @endforeach
                                        </div><!-- /#owl-single-product-thumbnails -->
                                    </div><!-- /.gallery-thumbs -->

                                </div><!-- /.single-product-gallery -->
                            </div><!-- /.gallery-holder -->
                            <div class="col-sm-6 col-md-7 product-info-block">
                                <div class="product-info">
                                    <h class="name" id="pname">
                                       
                                        {{ $product->product_name_en }}
                                       
                                    </h
                                    1>
                                  

                                    <div class="stock-container info-container m-t-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="stock-box">
                                                    <span class="label">Availability :</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="stock-box">
                                                    @if ($product->product_qty<1)
                                                    <span class="value">Out of Stock</span>
                                                    @else
                                                    <span class="value">In Stock</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.stock-container -->

                                    <div class="description-container m-t-20">
                                        @if (session()->get('language') == 'bangla')
                                        {!! $product->short_description_bn !!}
                                        @else
                                        {!! $product->short_description_en !!}
                                        @endif
                                    </div><!-- /.description-container -->

                                    <div class="price-container info-container m-t-20">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="price-box">
                                                    @if ($product->discount_price == NULL)
                                                        <span class="price">&#8358;{{ $product->selling_price }}</span>
                                                    @else
                                                    <span class="price">&#8358;{{ $product->discount_price }}</span>
                                                    <span class="price-strike">${{ $product->selling_price }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="favorite-button m-t-10">
                                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                                        title="" href="#" data-original-title="Wishlist">
                                                        <i class="fa fa-heart"></i>
                                                    </a>
                                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                                        title="" href="#" data-original-title="Add to Compare">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                                        title="" href="#" data-original-title="E-mail">
                                                        <i class="fa fa-envelope"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.price-container -->

                                  
                                    <div class="quantity-container info-container">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <span class="label">Qty :</span>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cart-quantity">
                                                    <div class="quant-input">
                                                        <div class="arrows">
                                                            <div class="arrow plus gradient"><span class="ir"><i
                                                                        class="icon fa fa-sort-asc"></i></span></div>
                                                            <div class="arrow minus gradient"><span class="ir"><i
                                                                        class="icon fa fa-sort-desc"></i></span></div>
                                                        </div>
                                                        <input type="number" id="qty" value="1" min="1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-7">
                                                <input type="hidden" name="" id="product_id" value="{{ $product->id }}" min="1">
                                                <button type="submit" class="btn btn-primary" onclick="addToCart()">
                                                    <i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</button>
                                            </div>


                                        </div><!-- /.row -->
                                    </div><!-- /.quantity-container -->
                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                    </div>
                    <div class="product-tabs inner-bottom-xs  wow fadeInUp animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                    <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                                    <li><a data-toggle="tab" href="#review">REVIEW</a></li>
                                    <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                                </ul><!-- /.nav-tabs #product-tabs -->
                            </div>
                            <div class="col-sm-9">

                                <div class="tab-content">

                                    <div id="description" class="tab-pane in active">
                                        <div class="product-tab">
                                            <p class="text">
                                            
                                            {!! $product->long_description_en !!}
                                       
                                            </p>
                                        </div>
                                    </div><!-- /.tab-pane -->

                                </div><!-- /.tab-content -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.product-tabs -->

                    <!--  UPSELL PRODUCTS  -->
                    {{-- @include('frontend.frontend_layout.product_page.up-sell-products') --}}
                    <!--  UPSELL PRODUCTS : END  -->
                </div><!-- /.col -->
                <div class="clearfix"></div>
            </div>
            <!-- /.row -->
            <!--  BRANDS CAROUSEL  -->
            {{-- @include('frontend.frontend_layout.home_page.brands-carousel') --}}
            <!-- /.logo-slider -->
            <!--  BRANDS CAROUSEL : END  -->
        </div>
        <!-- /.container -->

    </div>
@endsection
