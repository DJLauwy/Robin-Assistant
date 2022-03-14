<!DOCTYPE html>
<html>
    <head>
        <title>@section('title') 404 @show | Robin Assistant</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    </head>
    <body class="main-body">

    <img class="logo-vaag"  src="{{ asset('img/logo-vaag.png') }}" alt="">

    @include('layouts.blocks.data')
    @include('layouts.blocks.header')
    @include('layouts.blocks.content')


    </body>
</html>
