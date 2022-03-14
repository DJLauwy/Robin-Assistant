
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

    Client 1
    <input type="radio" checked="checked" name="radio">
    <span class="list-checkmark"></span>
</label>

<label class="list-container">Client 2
    <input type="radio" name="radio">
    <span class="list-checkmark"></span>
</label>

<label class="list-container">Client 3
    <input type="radio" name="radio">
    <span class="list-checkmark"></span>
</label>


@endsection
