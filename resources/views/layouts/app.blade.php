<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
</head>
    @if ($user = Auth::user())
        @foreach($person as $uporabnik)
            @if($uporabnik->id == Auth::user()->id)
                @if($uporabnik->theme_id == 1)
                    <body style="background-color:#383838;">
                    <div id="app">
                    <main class="py-4">
                    <div class='theme + theme--dark'>
                @else
                    <body>
                    <div id="app">
                    <main class="py-4">
                    <div class='theme + theme--default'>
                @endif
            @endif
        @endforeach 
    @else
    <body>
        <div id="app">
            <main class="py-4">
                <div class='theme + theme--default'>
    @endif
                    <div class='container'>
                        @include('inc.navbar')
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
