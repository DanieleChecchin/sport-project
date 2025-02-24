<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('storage/serie A.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Preload important fonts -->
    <link rel="preload" href="https://fonts.bunny.net/css?family=Nunito" as="style">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description here">
    <meta name="author" content="Your Name or Company">

    <!-- Open Graph Meta Tags (for better social media integration) -->
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}">
    <meta property="og:description" content="Your description here">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">

</head>

<body class="bg-light d-flex flex-column min-vh-100">
    <div id="app">
        @include('partials.header')

        <main class="mt-6">
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

</body>

</html>
