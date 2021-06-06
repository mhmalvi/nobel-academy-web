<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>NTA - Noble Training Academy</title>
@stack('seo')

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