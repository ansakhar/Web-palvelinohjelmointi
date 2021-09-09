<html>
    <head>
        <title>InfoSite</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/tyyli.css') }}" >
    </head>
    <body>

    <div id='container'>

<a href="{{url('/do_shopping')}}">Tee ostoksia</a>
<a href="{{url('/basket_content')}}">Ostokorin sisältö</a>

@section('title')
<p>Ei infoa</p>
            @show

<div class="boxi">
@section('infobar')
<p>Ei infoa</p>
            @show
</div>

@yield('tyhakori')

    </div>

    </body>
</html>