@extends('layouts.navbar2')

    <title>Listaa asiakkaat</title>

    @section('title')
    <h3>Listaa asiakkaat</h3>
    @endsection

    @section('infobar')
      <table >
        <tr><th>Name</th><th>Birth date</th><th>Created_at</th></tr>
        @foreach ($customers as $customer)
    <tr>
        <td>
             <a href='customers/{{ $customer->id}}/edit'>
             {{ $customer->name }}
             </a>
         </td>
        <td>{{ $customer->birth_date }}</td>
        <td>{{ $customer->created_at }}</td>
    </tr>
@endforeach
      </table>
      @endsection
