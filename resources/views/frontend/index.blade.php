@extends('frontend.frontend_master')

@section('title')
   ScooterLux Fashion
@endsection

@section('frontend_content')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!--  SIDEBAR  -->
                {{-- @include('frontend.frontend_layout.body.sidebar') --}}
            <!--  SIDEBAR : END  -->
            <!--  CONTENT  -->
            <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder" style="min-height: 37vh;"
              
                
                @include('frontend.frontend_layout.home_page.new-arrivals')
               

            </div>
            <!-- /.homebanner-holder -->
            <!--  CONTENT : END  -->
        </div>
        <!-- /.row -->
        <!--  BRANDS CAROUSEL  -->
        {{-- @include('frontend.frontend_layout.home_page.brands-carousel') --}}
        <!-- /.logo-slider -->
        <!--  BRANDS CAROUSEL : END  -->
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
@endsection
