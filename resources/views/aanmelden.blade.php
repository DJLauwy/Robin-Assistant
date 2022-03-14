@extends('layouts.main')


@section('title')
    Register
@endsection

@section('data')

@endsection

@section('content')
    <section class="content container-main">
        <div>
            <div class="title">
                <h1>Registreren</h1>
            </div>
            <form class="login">
                <input class="name"  type="text" id="fname" placeholder="Naam"><br>
                <input class="name"  type="text" id="lname" placeholder="E-mail" name="lname"><br>
                <input class="wachtwoord"  type="text" id="lname" placeholder="Wachtwoord" name="lname"><br>
                <input class="bottom-registreer" type="button" value="Wachtwoord vergeten?">

                <div class="login-footer">
                    <input class="bottom-login" type="submit" value="Registreer"> <br>
                    <a href="/register"><input class="bottom-registreer" type="button" value="Al een account? Ga hier naar login"></a>
                </div>
            </form>
        </div>
    </section>
@endsection
