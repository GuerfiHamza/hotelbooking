<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ $seoSettings->site_title }}</title>
    <meta name="description" content="{{ $seoSettings->meta_description }}">
    
    <meta name="keywords" content="{{ $seoSettings->meta_keywords }}">
    
    <meta name="robots" content="{{ $seoSettings->meta_robots }}">
    <meta name="author" content="Sea Websense">
    <meta name="publisher" content="Sea Websense">

    <meta property="og:title" content="{{ $seoSettings->og_title }}">
    <meta property="og:description" content="{{ $seoSettings->og_description }}">
    <meta property="og:image" content="{{ $seoSettings->og_image }}">
    
    <meta name="twitter:title" content="{{ $seoSettings->twitter_title }}">
    <meta name="twitter:description" content="{{ $seoSettings->twitter_description }}">
    <meta name="twitter:image" content="{{ $seoSettings->twitter_image }}">
    <link rel="shortcut icon" href="{{asset('storage/'.$seoSettings->favicon_url)}}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('head')
</head>
<body class="bg-black">
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
    @yield('scripts')
</body>
</html>