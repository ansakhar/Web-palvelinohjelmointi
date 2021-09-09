@extends('layouts.navbar2')
    <title>Muokkaa asiakkaan tietoja</title>
 
    @section('title')
    <h3>Muokkaa asiakkaan tietoja</h3>
    @endsection

    @section('infobar')
    <div class="boxi">
    <form method="POST" action="{{ url('/') }}/customers/{{ $customer->id}}">

      {{ method_field('PATCH') }}
      {{ csrf_field() }}

      Nimi<br>
        <input type="text" name="name" value="{{ $customer->name }}"><br>
      Syntymäpäivä<br>
        <input type="text" name="birth_date" value="{{ $customer->birth_date }}"><br><br>

       <div>
         <button type="submit">Tallenna</button>
       </div>

     </form>

     <form method="POST" action="{{ url('/') }}/customers/{{ $customer->id}}">

      @method('DELETE')
      @csrf

       <div>
         <button type="submit">Poista</button>
       </div>

     </form>
     </div>
     @endsection