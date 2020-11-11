<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('front/styles/bootstrap4/bootstrap.min.css')}}">
    <link
        href="{{asset('front/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/styles/shop_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/styles/shop_responsive.css')}}">
</head>
<div class="super_container">
    @include('layouts.front.shop.header')
    <div class="shop">
        <div class="container">
            <div class="row">
                @include('layouts.front.shop.sidebar')
                @yield('content')
            </div>
        </div>
    </div>
    @include('layouts.front.shop.footer')
</div>
<body>
<script src="{{asset('front/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('front/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('front/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('front/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('front/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('front/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('front/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('front/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('front/plugins/easing/easing.js')}}"></script>
<script src="{{asset('front/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('front/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
<script src="{{asset('front/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('front/js/shop_custom.js')}}"></script>
</body>

</html>
