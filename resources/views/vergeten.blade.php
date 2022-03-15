

@extends('layouts.main')

@section('title')
    Wachtwoord vergeten
@endsection

@section('data')

@endsection

@section('content')
    <section class="content container-main">
        <div>
            <div class="title">
                <h1>Wachtwoord vergeten</h1>
            </div>
            <form class="login" action="/">
                <input class="name"  type="text" id="fname" placeholder="E-mail"><br>
                <a href="/" class="bottom-registreer" type="button">
                    Terug naar login
                </a>

                <div class="login-footer">
                    <input class="bottom-login" type="submit" value="Verzend E-mail"> <br>
                    <a href="/aanmelden"><input class="bottom-registreer" type="button" value="Geen account? Registreer hier"></a>
                </div>
            </form>
        </div>
    </section>

@endsection
