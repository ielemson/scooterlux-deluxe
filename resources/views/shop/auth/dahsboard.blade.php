@extends('shop.layout.master')

@section('content')
    @include('shop.includes.header')

    @include('shop.auth.includes.breadcrumb',['dashboard'=>'Dashboard'])
    
<!-- My Account Area -->
 <section class="my-account-area section_padding_100_50">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="my-account-navigation mb-50">
                    @include('shop.auth.includes.sidebar')
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="my-account-content mb-50">
                    <p>  Welcome To {{ env('APP_NAME') }} <strong>{{ Auth::user()->name }}</strong> </p>
                    <p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and <a href="{{route('user.change.password')}}">edit your password and account details</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- My Account Area -->
@endsection