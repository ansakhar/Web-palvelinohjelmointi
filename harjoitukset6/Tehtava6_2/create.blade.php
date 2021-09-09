@extends('layouts.navbar2')
    <title>Lisää asiakas</title>


    @section('title')
    <h3>Lisää asiakas</h3>
    @endsection

    @section('infobar')
    <div class="boxi">
    <form method="POST" action="../customers">

      {{ csrf_field() }}

      Nimi<br>
        <input type="text" name="name" placeholder="Sukunimi Etunimi"><br>
      Syntymäpäivä<br>
        <input type="text" name="birth_date" value="2011-11-11"><br><br>

       <div>
         <button type="submit">Tallenna</button>
       </div>

     </form>
     </div>
     @endsection