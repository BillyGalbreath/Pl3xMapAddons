<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <title inertia>{{ config('app.name', 'Laravel') }}</title>
    <style>
        :root {
            color-scheme: light;

            --fast: 0.2s ease-in-out all;
            --fast-bg: 0.2s ease-in-out background-color, 0.2s ease-in-out border-color;

            --primary: #4286f5;
            --error: #e7195a;

            --darkest: #010409;
            --darker: #0d1117;
            --dark: #161b22;
            --light: #21262d;
            --lighter: #30363d;
            --lightest: #8b949e;
            --white: #c9d1d9;
            --whiter: #f0f6fc;
            --whitest: #ffffff;

            --github-background: var(--light);
            --github-text: var(--whiter);

            --body-background: var(--whiter);
            --body-text: var(--darker);

            --drawer-background: rgba(255, 255, 255, 0.8);
            --drawer-text: var(--darker);
            --drawer-border: var(--white);

            --header-background: var(--whitest);
            --header-text: var(--dark);
            --header-link: var(--dark);

            --footer-background: var(--dark);
            --footer-text: var(--white);

            --nav-btn-color: var(--primary);

            --sidebar-background: var(--whitest);
            --sidebar-border: var(--white);
            --sidebar-text: var(--light);

            --addon-background: var(--whitest);
            --addon-border: var(--white);
            --addon-header: var(--dark);
            --addon-text: var(--light);
        }

        .darkmode {
            color-scheme: dark;

            --github-background: var(--light);
            --github-text: var(--whiter);

            --body-background: var(--darkest);
            --body-text: var(--white);

            --drawer-background: rgba(0, 0, 0, 0.8);
            --drawer-text: var(--whiter);
            --drawer-border: var(--lighter);

            --header-background: var(--dark);
            --header-text: var(--whiter);
            --header-link: var(--whiter);

            --footer-background: var(--darker);
            --footer-text: var(--white);

            --nav-btn-color: var(--primary);

            --sidebar-background: var(--darker);
            --sidebar-border: var(--lighter);
            --sidebar-text: var(--lightest);

            --addon-background: var(--darker);
            --addon-border: var(--lighter);
            --addon-header: var(--white);
            --addon-text: var(--lightest);
        }

        body {
            background: var(--body-background);
            color: var(--body-text);
        }

        .animate body {
            transition: var(--fast-bg);
        }
    </style>
    <script>
        const enable = () => {
            document.documentElement.classList.add('darkmode');
            localStorage.setItem('darkmode', 'enabled');
        }

        const disable = () => {
            document.documentElement.classList.remove('darkmode');
            localStorage.setItem('darkmode', 'disabled');
        }

        const isEnabled = () => {
            return localStorage.getItem('darkmode') !== 'disabled';
        }

        if (isEnabled()) {
            enable();
        }
    </script>
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
    <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon-192.png')}}"/>
    <link rel="shortcut icon" sizes="192x192" href="{{asset('images/favicon-192.png')}}"/>
    <link rel="apple-touch-icon" href="{{asset('images/favicon-192.png')}}"/>
    <link rel="mask-icon" href="{{asset('images/favicon-192.png')}}"/>
    <meta name="msapplication-TileColor" content="#aa3d1e"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#000000"/>
    <meta name="color-scheme" content="light dark">
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<body id="app" data-page="{{json_encode($page)}}">
@inertia
</body>
</html>
