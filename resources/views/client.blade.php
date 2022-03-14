@extends('layouts.main')

@section('title')
    Kies Client
@endsection

@section('content')
    <div class="title">
        <h1 class="client-titel">Kies een cliënt</h1>
    </div>

    <label class="client-container">Client 1
        <input type="radio" checked="checked" name="radio">
        <span class="checkmark"></span>
    </label>
    <label class="client-container">Client 2
        <input type="radio" name="radio">
        <span class="checkmark"></span>
    </label>
    <label class="client-container">Client 3
        <input type="radio" name="radio">
        <span class="checkmark"></span>
    </label>

    <form class="login">
        <div class="login-footer">
            <input class="bottom-login" type="submit" value="Bevestig"> <br>
        </div>
    </form>
    </section>
@endsection
