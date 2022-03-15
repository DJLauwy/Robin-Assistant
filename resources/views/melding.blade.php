@extends('layouts.details')

@section('title')
    Meldingen
@endsection

@section('content')
    <section class="melding">


        <div id="verwijder1">
            <button class="verwijder" onclick="verwijderfuncie1()">Verwijder</button>


            <div class="melding_notification">
                <div class="melding_holder">
                    <h2>Melding</h2>
                    <p>Activiteit opstaan compleet uitgevoerd</p>
                </div>
                <div class="melding_select">

                </div>
            </div>
        </div>

        <script>
            function verwijderfuncie1() {
                var x = document.getElementById("verwijder1");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script> <br>


        <div id="verwijder2">
            <button class="verwijder" onclick="verwijderfuncie2()">Verwijder</button>


        <div class="melding_notification">
            <div class="melding_holder">
                <h2>Melding</h2>
                <p>Activiteit opstaan compleet uitgevoerd</p>
            </div>
            <div class="melding_select">

            </div>
        </div>
        </div>

        <script>
            function verwijderfuncie2() {
                var x = document.getElementById("verwijder2");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script>


    </section>

@endsection



