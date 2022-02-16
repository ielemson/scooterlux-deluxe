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

    <!-- Welcome Slides Area -->
     <!-- Welcome Slides Area -->
     @include('shop.includes.slider')
     <!-- Welcome Slides Area -->

     {{-- @include('shop.includes.specialoffer') --}}
    <!-- Welcome Slides Area -->
@endsection