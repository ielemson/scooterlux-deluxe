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
                    <h5>Reset Password</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('login')}}">Password</a></li>
                        {{-- <li class="breadcrumb-item active"></li> --}}
                    </ol>
                </div>
            </div>
        </div>
    </div>
 
   
	   <!-- Login Area -->
	   <div class="bigshop_reg_log_area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mx-auto">
                    <div class="login_form mb-50">
                        {{-- <h5 class="mb-3">Login</h5> --}}

                        <form class="register-form outer-top-xs" role="form" action="{{ route('password.email') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                <input type="email" name="email" class="form-control unicase-form-control text-input" required>
                            </div>
                            <button type="submit" class="btn-upper btn btn-primary btn-sm btn-block">{{ __('Email Password Reset Link') }}</button>
                        </form>
                       
                    </div>
                </div>

              
            </div>
        </div>
    </div>
    <!-- Login Area End -->

@endsection