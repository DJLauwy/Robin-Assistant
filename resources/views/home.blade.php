@extends('layouts.main')

@section('title')
    Login
@endsection

@section('data')

@endsection

@section('content')
    <div class="title">
        <h1>login</h1>
    </div>
    <form class="login" action="/action_page.php">
        <input class="name"  type="text" id="fname" value="E-mail"><br><br>
        <input class="wachtwoord"  type="text" id="lname" value="Wachtwoord" name="lname"><br><br>
        <div class="login-footer">
            <input class="bottom-login" type="submit" value="login"> <br>
            <input class="bottom-registreer" type="button" value="Geen account? Registreer hier">
        </div>
    </form>
@endsection
