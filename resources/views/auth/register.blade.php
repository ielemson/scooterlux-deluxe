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
                    <h5>User Register</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('login')}}">Register</a></li>
                        {{-- <li class="breadcrumb-item active"></li> --}}
                    </ol>
                </div>
            </div>
        </div>
    </div>
 
    {{-- Laravel\Fortify\Http\Controllers\PasswordResetLinkController@create --}}
	   <!-- Login Area -->
	   <div class="bigshop_reg_log_area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 mx-auto">
                    <div class="login_form mb-50">
                        <h5 class="mb-3">Register Account</h5>
                        <form  method="POST" action="{{ route('register') }}" method="post">

                            @csrf

                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}">
                                @error('email')
                                <span class="alert text-danger text-xs">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="username" placeholder="Full Name" name="name"  value="{{old('name')}}">
                                @error('name')
                                <span class="alert text-danger text-xs">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="username" placeholder="phone" name="phone_number"  value="{{old('phone_number')}}">
                                @error('phone_number')
                                <span class="alert text-danger text-xs">{{ $message }}</span>
                            @enderror
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                @error('password')
                                <span class="alert text-danger text-xs">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" placeholder="Repeat Password" name="password_confirmation">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Register</button>
                        </form>
                      
                    </div>
                </div>

              
            </div>
        </div>
    </div>
    <!-- Login Area End -->

@endsection

@push('customjs')
<style>
    .text-danger {
        font-weight: 800;
        font-size:0.8rem
    }
</style>
@endpush