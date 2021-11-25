<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="google-site-verification" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - NTA</title>
    <link rel="icon" href="{{ asset('assets/images/logo/favicon.png') }}">
    
    <link rel="preload" href="{{asset('assets/fonts/museo_slab_0-webfont.woff2')}}" as="font" type="font/woff2" crossorigin> 
    <link rel="preload" href="{{asset('assets/fonts/museo_slab_0-webfont.woff')}}" as="font" type="font/woff" crossorigin> 
    <link rel="preload" href="{{asset('assets/fonts/museo_slab_1-webfont.woff2')}}" as="font" type="font/woff2" crossorigin> 
    <link rel="preload" href="{{asset('assets/fonts/museo_slab_1-webfont.woff')}}" as="font" type="font/woff" crossorigin> 
    
    <link rel="canonical" href="{{ URL::current() }}" />
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <meta name="title" content="@yield('title') - NTA" />
    
    @stack('seo')

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('title') - NTA">
    <meta property="og:site_name" content="Noble Training Academy - NTA">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ URL::current() }}">
    @stack('og')
    {{-- Open Graph --}}

    <meta property="article:section" content="Noble Training Academy">
    <meta property="article:section" content="about us">
    <meta property="article:section" content="diploma in beauty therapy">
    <meta property="article:section" content="diploma in remedial massage">
    <meta property="article:section" content="certificate iii in hairdressing">
    <meta property="article:section" content="certificate iv in beauty therapy">

    <meta name="ahrefs-site-verification" content="c6df018699d9864e4f9c1521bf9ee15e4f9385ca41191ae25fe13bc86a28c0ec">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZFG86J3Y2L"></script>

    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-ZFG86J3Y2L');
    </script>

    @include('partials.styles')
</head>

<body class="pushmenu-push">
    <a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
    <!--Loader-->
    <div class="loader">
        <div class="bouncybox">
            <div class="bouncy"></div>
        </div>
    </div>
    @auth
        <div class="d-flex justify-content-center bg-light">
            <a href="{{ route('admin.home') }}"><i class="fa fa-pencil-square"></i> Back to dashboard!</a>
        </div>
    @endauth
    @if (Route::currentRouteName() == 'home')
        @include('components.header')
    @else
        @include('components.navBar')
    @endif
    
    <div id="app">
        @yield('content')
    </div>
    
    @include('components.rpl-modal')
    @include('components.footer')
    
    <script src="{{ asset('js/app.js') }}"></script>
    @include('partials.scripts')
    @include('components.applyNow')
</body>

</html>