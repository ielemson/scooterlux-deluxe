{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Hi..{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        This is just home page
    </div>
</x-app-layout> --}}

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

