@extends('layouts.main')

@section('title')
    Login
@endsection

@section('kop')
    Login
@endsection

@section('name')
    <div class="container-mid">

            <form class="login" action="/action_page.php">

                <input class="name"  type="text" id="fname" value="Naam"><br><br>
            </form>
        @endsection

        @section('wachtwoord')
            <form>

            <input class="wachtwoord"  type="text" id="lname" value="Wachtwoord" name="lname"><br><br>
            </form>

        @endsection
        @section('vergeten')
            <form>

                <input class="bottom-registreer" type="button" value="Wachtwoord vergeten?">
            </form>

        @endsection

