<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('front/styles/bootstrap4/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/styles/cart_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/styles/cart_responsive.css')}}">
</head>

<body>
<div class="super_container">
    @include('layouts.front.account.header')
    @yield('content')
    @include('layouts.front.account.footer')
</div>

<script src="{{asset('front/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('front/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('front/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('front/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('front/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('front/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('front/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('front/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('front/plugins/easing/easing.js')}}"></script>
<script src="{{asset('front/js/cart_custom.js')}}"></script>
</body>

</html>
