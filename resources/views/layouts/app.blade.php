<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:300,400,600,700&display=swap" rel="stylesheet">

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

    <!-- Custom Styles for the Layout -->
    <style>
        /* Global Styles */
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f4f6f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        

        .navbar {
            background-color: #007bff;
            padding: 15px 0;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            display: inline-block;
        }

        .navbar a:hover {
            background-color: #0056b3;
            border-radius: 5px;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        /* Card Styling */
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            font-size: 18px;
            padding: 15px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 20px;
            font-size: 16px;
            color: #333;
        }

        .alert-success {
            background-color: #28a745;
            color: #fff;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .btn-link {
            text-decoration: none;
            color: #007bff;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar a {
                padding: 8px 12px;
            }

            .card-header {
                font-size: 16px;
            }

            .card-body {
                padding: 15px;
            }
        }
    </style>

</head>

<body class="bg-light">
    <div id="app">
        @include('partials.header')

        <main class="mt-6">
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

    <!-- Optional: Include Google Analytics (Replace with your own tracking code) -->
    @if (env('APP_ENV') === 'production')
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXX-Y"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-XXXXX-Y');
        </script>
    @endif
</body>

</html>
