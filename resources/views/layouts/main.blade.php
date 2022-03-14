<!DOCTYPE html>
<html>
    <head>
        <title>@section('title') 404 @show | Robin Assistant</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    </head>
    <body>

    @include('layouts.blocks.background')
    @include('layouts.blocks.nav')
    @include('layouts.blocks.top')
    @include('layouts.blocks.mid')
    @include('layouts.blocks.bot')
    @include('layouts.blocks.footer')

        <h1>@section('kop') 404 @show</h1>
    </body>
</html>
