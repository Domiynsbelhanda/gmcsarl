<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Groupe Manne Cachée</title>
    @include('partials.head')
</head>
<body>
<div class="preloader">
{{--    <button class="vs-btn preloaderCls">Cancel Preloader</button>--}}
    <div class="preloader-inner"><span class="loader"></span></div>
</div>

@include('partials.header')

@yield('content')

@include('partials.footer')

<a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/app.min.js')}}"></script>
<script src="{{asset('assets/js/layerslider.utils.js')}}"></script>
<script src="{{asset('assets/js/layerslider.transitions.js')}}"></script>
<script src="{{asset('assets/js/layerslider.kreaturamedia.jquery.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
