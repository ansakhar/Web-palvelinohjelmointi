<html>
    <head>
        <title>...</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/tyyli2.css') }}" >
    </head>
<body>

<div id='container'>

<div style="text-align: right; margin-top: 10px;padding-bottom: 10px;">
<span style="background-color: #ddd;">Cbook</span>
<em>by QaD Solutions</em>
</div>

<form method="GET" action="{{url('/customers')}}">

    [ <a href="{{url('/customers')}}">Listaa</a> ]
    [ <a href="{{url('/customers/create')}}">Lisää</a> ]
    <input type="text" name="haku" placeholder="Nimihaku" autocomplete="off"  onkeyup = "submit();" value = <?php if ( isset($_GET['haku'])) echo $_GET['haku'];?> >
</form>
<hr>
@section('title')
<p>Ei infoa</p>
            @show

@section('infobar')
<p>Ei infoa</p>
            @show

</div>

</body>
</html>