<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="" type="image/x-icon" />

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />

    <meta property="og:type" content="@yield('type', 'website')" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="@yield('image')" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="{{ url()->current() }}" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:image" content="@yield('image')" />

    <link rel="canonical" href="{{ url()->current() }}" />

    @vite('resources/css/app.css')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    @yield('css')
</head>

<body class="bg-slate-100">
    <x-header />
    @yield('content')
    <x-footer />
    @vite('resources/js/app.js')
    @yield('js')
</body>

</html>
