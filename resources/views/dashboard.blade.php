
@extends('frontend.frontend_master')
@section('title')
ScooterLux Dashboard
@endsection
@section('frontend_content')
<div class="body-content">
    <div class="container">
        <div class="row">
                @include('frontend.profile.user-sidebar')
            <div class="col-md-10 user-card">
               <section class="text-center">
                Welcome To {{ env('APP_NAME') }} <strong>{{ Auth::user()->name }}</strong>
               </section>
                @yield('userdashboard_content')
            </div>
        </div>
    </div>
</div>
@endsection

