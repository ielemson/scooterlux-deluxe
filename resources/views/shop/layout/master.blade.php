<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"> --}}
    <link rel="shortcut icon" href="{{asset('landing/img/favicon.png')}}">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('landing/img/favicon.png')}}">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('landing/img/favicon.png')}}">
    <!-- Standard iPad Touch Icon--> 
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('landing/img/favicon.png')}}">
    <!-- Standard iPhone Touch Icon--> 
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('landing/img/favicon.png')}}">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Title  -->
    <title>ScooterLux Shop</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('shop/style.css')}}">
    <!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0" nonce="MRM9xiIa"></script>    
@stack('customcss')
</head>

<body>
 
@yield('content')
 
@yield('main')
    <!-- Footer Area -->
  @include('shop.includes.footer')
  @stack('customjs')
    <!-- Footer Area -->
</body>
</html>