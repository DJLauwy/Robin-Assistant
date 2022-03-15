@extends('layouts.details')

@section('title')
    Toevoegen
@endsection

@section('content')
    <section class="naar_bed">
        <div class="naar_bed-task">
            <div class="naar_bed-holder">
                <h2>Datum</h2>
                <input class="inputs" type="date">
                <h2>Tijd</h2>
                <input class="inputs" type="time">
                <img class="add_img" src="{{ asset('/img/icons/19.000 get-ready-for-bed.png') }}" alt="">
            </div>
        </div>
        <div class="add-btn">
            <a href="#">Voeg toe aan agenda</a>
        </div>
    </section>
@endsection
