
@extends('layouts.overview')

@section('title')
    Wachtwoord vergeten
@endsection

@section('data')
        <h2 class="list_h2">
            <?php echo date("d F Y"); ?>
        </h2>

        <div class="list_arow-left">
            <
        </div>

        <div class="list_arow-right">
            >
        </div>

        <table class="datum">
            <tr>
                <th>Ma <br> 14</th>
                <th class="list_day">Di <br> 15</th>
                <th>Wo <br> 16</th>
                <th>Do <br> 17</th>
                <th>Vr <br> 18</th>
                <th>Za <br> 19</th>
                <th>Zo <br> 20</th>
            </tr>

        </table>


@endsection

@section('content')

 <section class="list">

<label class="list-container">

    <img src="/img/20.000 get-up.png" alt="20.000 get-up.png">

       <h3>
           Opstaan <span> <h5>
               8:00 - 9:00</h5>
           </span>
       </h3>

    <input type="radio" checked="checked" name="radio">
    <span class="list-checkmark"></span>
</label>

<label class="list-container">

    <img src="/img/3.000 brush-teeth.png" alt="20.000 get-up.png">

    <h3>
        Tanden poetsen <span> <h5>
               9:00 - 9:30</h5>
           </span>
    </h3>

    <input type="radio" name="radio">
    <span class="list-checkmark"></span>
</label>

<label class="list-container">

    <img src="/img/6.000 take-a-pee.png" alt="20.000 get-up.png">

    <h3>
        Toilet <span> <h5>
               9:30 - 9:45</h5>
           </span>
    </h3>

    <input type="radio" name="radio">
    <span class="list-checkmark"></span>
</label>

     <label class="list-container">

         <img src="/img/1.000 take-a-shower.png" alt="20.000 get-up.png">

         <h3>
             Douchen <span> <h5>
               9:45 - 10:15</h5>
           </span>
         </h3>

         <input type="radio" name="radio">
         <span class="list-checkmark"></span>
     </label>

     <label class="list-container">

         <img src="/img/36.000 get-dressed.png" alt="20.000 get-up.png">

         <h3>
             Omkleden <span> <h5>
               10:15 - 10:45</h5>
           </span>
         </h3>

         <input type="radio" name="radio">
         <span class="list-checkmark"></span>
     </label>

     <label class="list-container">

         <img src="/img/14.000 put-makeup.png" alt="20.000 get-up.png">

         <h3>
             Make-Up <span> <h5>
               10:45 - 11:30</h5>
           </span>
         </h3>

         <input type="radio" name="radio">
         <span class="list-checkmark"></span>
     </label>


@endsection
