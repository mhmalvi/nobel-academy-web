<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>NTA - Noble Training Academy</title>
@stack('seo')
<!-- Search Engine Optimization by estieque - https://portfolio.estiequealam.com/home -->
<title>Discover &amp;NTA-Noble Trainning Academy</title>
<meta name="description" content="Noble Training Academy was established in 2016 and is privately operated Registered Training Organisation. Our courses are provided within Australia."/>
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
<link rel="canonical" href="https://nta.nsw.edu.au/" />
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:keywords" content="beauty therapy,remedial massage,hair dressing,certificate iii,diploma,colleges in australia,certificate ii">
<meta property="og:title" content="Discover &amp;NTA-Noble Trainning Academy">
<meta property="og:description" content="Noble Training Academy was established in 2016 and is privately operated Registered Training Organisation. Our courses are provided within Australia.">
<meta property="og:url" content="https://nta.nsw.edu.au/">
<meta property="og:site_name" content="NTA">
<meta property="article:section" content="Noble Training Academy">
<meta property="article:section" content="about us">
<meta property="article:section" content="diploma in beauty therapy">
<meta property="article:section" content="diploma in remedial massage">
<meta property="article:section" content="certificate iii in hairdressing">
<meta property="article:section" content="certificate iv in beauty therapy">

<!-- /estieque SEO expert -->


<link rel="icon" href="{{asset('assets/images/logo/favicon.png')}}">

    @include('partials.styles')
    @livewireStyles
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
            <a href="{{route('admin.home')}}"><i class="fa fa-pencil-square"></i> Back to dashboard!</a>
        </div>
    @endauth
    @if (Route::currentRouteName() == 'home')
        @include('components.header')
    @else
        @include('components.navBar')
    @endif
    @yield('content')
    @include('components.footer')
    @include('partials.scripts')
    @livewireScripts
    @include('components.applyNow')
</body>
</html>