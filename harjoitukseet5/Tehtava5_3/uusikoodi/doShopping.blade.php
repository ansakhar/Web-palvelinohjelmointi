@extends('layouts.navbar')

<title>OstosKoriTori</title>

@section('title')
<h2>OstosKoriTori</h2>
@endsection

@section('infobar')
<p>Lisää auto ostoskoriin klikkaamalla kuvaa!</p>
<table> <tr> 
<td> <figure> <a href="{{url('/do_shopping')}}"><img src="{{url('/images/passat.jpg')}}" height ="250" width = "400"></a> <figcaption>Passat</figcaption> </figure></td>
<td> <figure> <a href="{{url('/do_shopping')}}"><img src="{{url('/images/multivan.jpg')}}" height ="250" width = "400"></a> <figcaption>Multivan</figcaption> </figure></td>
</tr>
</table>
@endsection
