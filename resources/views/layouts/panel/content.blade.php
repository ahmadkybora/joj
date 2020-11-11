<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>پنل مدیریت | جوجو</title>
    <link rel="stylesheet" href="{{asset('panel/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('panel/dist/css/adminlte.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('panel/plugins/animatedModal/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('panel/plugins/animatedModal/normalize.min.css')}}">
    <link rel="stylesheet" href="{{asset('panel/dist/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('panel/dist/css/custom-style.css')}}">
    <link rel="stylesheet" href="{{asset('panel/dist/css/style.css')}}">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
    @include('layouts.panel.navbar')
    @include('layouts.panel.sidebar')
    <div class="content-wrapper">
        @yield('content')
    </div>
    @include('layouts.panel.footer')
</div>

<script src="{{asset('panel/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('panel/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('panel/dist/js/adminlte.js')}}"></script>
<script src="{{asset('panel/dist/js/demo.js')}}"></script>
<script src="{{asset('panel/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('panel/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('panel/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('panel/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('panel/plugins/chartjs-old/Chart.min.js')}}"></script>
<script src="{{asset('panel/plugins/animatedModal/animatedModal.min.js')}}"></script>
<script src="{{asset('panel/dist/js/pages/dashboard2.js')}}"></script>
@include('sweetalert::alert')
</body>
</html>
