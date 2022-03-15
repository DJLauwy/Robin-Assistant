@extends('layouts.details')

@section('title')
    Toevoegen
@endsection

@section('content')
    <section class="opstaan">
        <div class="opstaan-task">
            <div class="opstaan-holder">
                <h2>Datum</h2>
                <input class="inputs" type="date">
                <h2>Tijd</h2>
                <input class="inputs" type="time">
                <img class="add_img" src="{{ asset('/img/icons/20.000 get-up.png') }}" alt="">
            </div>
        </div>
        <div class="add-btn">
            <a href="/tasks">Voeg toe aan agenda</a>
        </div>
    </section>
@endsection
