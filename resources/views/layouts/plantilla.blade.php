<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Gestiona todos tus equipos y partidos desde un único lugar">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    @vite(['resources/css/app.css', 'resources/css/custom.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>

@include('layouts.includes.header')

<script src="{{ URL::asset('js/menu.js') }}"></script>

<div class="h-fit">
    @yield('content')
</div>

@include('layouts.includes.footer')

</html>