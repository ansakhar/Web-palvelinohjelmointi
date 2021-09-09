@extends('layouts.app-studetronic')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading"><span style="font-weight: bold">{{ $coursecredits[0]->Kurssi }}</span>-opintojakson suorittaneet opiskeljat</div>


<div class="panel-body">

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Sukunimi</th>
      <th scope="col">Etunimi</th>
      <th scope="col">Kurssi</th>
      <th scope="col">Opintopisteet</th>
    </tr>
  </thead>
  <tbody>

@foreach ($coursecredits as $coursecredit)

    <tr class="bg-success">
      <th scope="row">{{ $coursecredit->id }}</th>
      <td>{{ $coursecredit->Sukunimi }}</td>
      <td>{{ $coursecredit->Etunimi }}</td>
      <td>{{ $coursecredit->Kurssi }}</td>
      <td>{{ $coursecredit->credits }}</td>
    </tr>

@endforeach

  </tbody>
</table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection