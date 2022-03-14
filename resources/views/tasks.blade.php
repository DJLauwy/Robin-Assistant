@extends('layouts.agenda')

@section('title')
    Home
@endsection

@section('content')
    <section class="tasks">
        <div class="block left">

            <a href="/bedtijd" class="task_item task_orange">
                <h4>Slapen</h4>
                <img class="task_itemimg" src="{{ asset('/img/icons/19.000 get-ready-for-bed.png')}}" alt="1">
            </a>

            <a href="/opstaan" class="task_item task_green">
                <h4>Opstaan</h4>
                <img class="task_itemimg" src="{{ asset('/img/icons/20.000 get-up.png')}}" alt="2">
            </a>

            <a href="#" class="task_item task_green">
                <h4>Douchen</h4>
                <img class="task_itemimg" src="{{ asset('/img/icons/1.000 take-a-shower.png')}}" alt="1">
            </a>

            <a href="#" class="task_item task_orange">
                <h4>Tandenpoetsen</h4>
                <img class="task_itemimg" src="{{ asset('/img/icons/3.000 brush-teeth.png')}}" alt="2">
            </a>

            <a href="#" class="task_item task_orange">
                <h4>Handen wassen</h4>
                <img class="task_itemimg" src="{{ asset('/img/icons/5.000 wash-hands.png')}}" alt="1">
            </a>

            <a href="#" class="task_item task_green">
                <h4>Bad</h4>
                <img class="task_itemimg" src="{{ asset('/img/icons/2.000 take-a-bath.png')}}" alt="2">
            </a>

            <a href="#" class="task_item task_green">
                <h4>WC</h4>
                <img class="task_itemimg" src="{{ asset('/img/icons/6.000 take-a-pee.png')}}" alt="1">
            </a>

            <a href="#" class="task_item task_orange">
                <h4>Aankleden</h4>
                <img class="task_itemimg" src="{{ asset('/img/icons/36.000 get-dressed.png')}}" alt="2">
            </a>

        </div>
        <div class="block right">
            <div class="task_notification btn-shadow">
                <h4>Dagelijkse activiteiten</h4>
                <p>Hier vind je de dagelijkse activiteiten die je kan gebruiken in je
                    planning. Je planning kan je helemaal zelf indelen.</p>
            </div>
        </div>
    </section>
@endsection
