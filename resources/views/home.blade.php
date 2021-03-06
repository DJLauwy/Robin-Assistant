@extends('layouts.main')

@section('title')
    Login
@endsection

@section('data')

@endsection

@section('content')
    <section class="content container-main">
        <div>
            <div class="title">
                <h1>login</h1>
            </div>
            <form class="login" action="/client">
                <input class="name"  type="text" id="fname" placeholder="E-mail"><br>
                <input class="wachtwoord"  type="text" id="lname" placeholder="Wachtwoord" name="lname"><br>
                <a href="/vergeten" class="bottom-registreer" type="button">
                    Wachtwoord vergeten?
                </a>

                <div class="login-footer">
                    <input class="bottom-login" type="submit" value="login"> <br>
                    <a href="/aanmelden"><input class="bottom-registreer" type="button" value="Geen account? Registreer hier"></a>
                </div>
            </form>
        </div>
    </section>
@endsection
