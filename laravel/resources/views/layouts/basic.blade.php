<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/gestao.css') }}">
</head>

<body>
    @include('layouts._partials.header-menu')

    @yield('header')

</body>

</html>
