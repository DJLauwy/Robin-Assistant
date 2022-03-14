

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

            <form class="login">
                <input class="name"  type="text" id="lname" placeholder="E-mail" name="lname"><br>
                <input class="bottom-registreer" type="button" value="Wachtwoord vergeten?">

                <div class="login-footer">
                    <input class="bottom-login" type="submit" value="Verzend E-mail"> <br>
                    <a href="/register"><input class="bottom-registreer" type="button" value="Geen account? Registreer hier"></a>
                </div>
            </form>
        </div>
    </section>

@endsection
