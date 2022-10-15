<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <title inertia>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Blazing fast live mapping solution for Paper and friends"/>
    <meta name="keywords" content="minecraft, map, dynamic, pl3x, pl3xmap"/>
    <meta name="author" content="BillyGalbreath">
    <meta property="og:url" content="https://addons.pl3x.net">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:image" content="https://raw.githubusercontent.com/BillyGalbreath/Pl3xMap/v2/webmap/public/images/og.png">
    <meta property="og:description" content="Blazing fast live mapping solution for Paper and friends">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="https://addons.pl3x.net">
    <meta name="twitter:title" content="{{ config('app.name') }}">
    <meta name="twitter:description" content="Blazing fast live mapping solution for Paper and friends">
    <meta name="twitter:image" content="https://raw.githubusercontent.com/BillyGalbreath/Pl3xMap/v2/webmap/public/images/og.png">
    <link rel="manifest" href="{{asset('manifest.json')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('favicon-192.png')}}"/>
    <link rel="shortcut icon" sizes="192x192" href="{{asset('favicon-192.png')}}"/>
    <link rel="apple-touch-icon" href="{{asset('favicon-192.png')}}"/>
    <link rel="mask-icon" href="{{asset('favicon-192.png')}}"/>
    <meta name="msapplication-TileColor" content="#aa3d1e"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#000000"/>
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<!--<body id="app" data-page="{{json_encode($page)}}">-->
<body>
@inertia
</body>
</html>
