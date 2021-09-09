@extends('layouts.navbar')

<title>OstosKoriTorin ostoskorin sisältö</title>

@section('title')
<h2>OstosKoriTorin ostoskorin sisältö</h2>
@endsection

@section('infobar')
<table> <tr> 
<td><img src="{{url('/images/passat.jpg')}}" height ="250" width = "400"></td>
<td>Passat 3 kpl</td>
</tr>
<tr>
<td><img src="{{url('/images/multivan.jpg')}}" height ="250" width = "400"></td>
<td>Multivan 4 kpl</td>
</tr>
</table>
@endsection

@section('tyhakori')
<a href="{{url('/basket_content')}}">Tyhennä ostoskori</a>
@endsection


