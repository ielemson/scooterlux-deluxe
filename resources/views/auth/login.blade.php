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
                    <h5>User Login</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('login')}}">Login</a></li>
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
                        <h5 class="mb-3">Login</h5>

                        <form action="{{ isset($guard) ? url($guard.'/login') : route('login') }}" method="POST">
							@csrf
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
								@error('email')
								<span class="alert text-danger text-sm">{{ $message }}</span>
							  @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
								@error('password')
								<span class="alert text-danger text-sm">{{ $message }}</span>
							  @enderror
                            </div>
                            <div class="form-check">
                                <div class="custom-control custom-checkbox mb-3 pl-1">
                                    <input type="checkbox" class="custom-control-input" id="customChe">
                                    <label class="custom-control-label" for="customChe">Remember me!</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Login</button>
                        </form>
                        <!-- Forget Password -->
                        <div class="forget_pass mt-15">
							@if (Route::has('password.request'))
							<a href="{{ route('password.request') }}" >Forgot your Password?</a>
						@endif
                        </div>
                    </div>
                </div>

              
            </div>
        </div>
    </div>
    <!-- Login Area End -->

@endsection