<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'laravel')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
       <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
    <div id="app">
    @include('layouts.nav')
<main class="">
<div 
class="jumbotron">
    <div class="container">
        <h4>Management Event</h4>
        <h1>SMK AL-BAHRI</h1>
        <h6>Jl. Yon Armed 7 No.143, RT.003/RW.006, Cikiwul, Bantargebang, Kota Bks, Jawa Barat 17152</h6>
    </div>
</div>
    @yield('content')
</main>
            </div>
        </div>
    </body>
</html>
