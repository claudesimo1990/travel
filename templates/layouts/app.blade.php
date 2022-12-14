<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

        <meta name="keywords" content="@yield('meta_keywords','some default keywords')">
        <meta name="description" content="@yield('meta_description','Faciliter vous la vente de vos kilos Et l\'envoi de vos Colis en toute securité vers multiples destinations.')">
        <link rel="canonical" href="{{ url()->current() }}"/>

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/colissend/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/colissend/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/colissend/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('/images/colissend/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('/images/colissend/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <title>@yield('title','Colissend | Faciliter vous la vente de vos kilos Et l\'envoi de vos Colis en toute securité vers multiples destinations.')</title>
        <!-- Styles -->
        <style>[x-cloak] { display: none !important; }</style>
        @livewireStyles
        @livewireStyles
        @livewireScripts
        @stack('scripts')
        <link rel="stylesheet" href="{{ mix('css/appController.css') }}">
    </head>
    <body class="bg-gray-100">
    @include('../includes.nav.desktop')
    @yield('header')
    @yield('content')
    @include('includes.footer')
    <script src="{{ mix('js/alpineController.js') }}"></script>
    <script src="{{ mix('js/appController.js') }}"></script>
    </body>
</html>
