<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel_Project') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/mycss.css')}}" >
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
    <div id="app">
        @include('include.nav')
        <div class="container">
                @include('include.messages')   
               
        </div>
        <main class="py-4">
                @yield('content')
        </main>
    </div>

    <!--<script src="vendor/unisharp/laravel-ckeditor/ckeditor.js"></script> 
    <script>
    CKEDITOR.replace('article-ckeditor');
    </script>-->

</body>
</html>
