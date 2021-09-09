<!DOCTYPE html>
<html>

  <head>
    <title>Metahakupalvelu</title>
    <style>
   li {
    list-style-type: none;
    margin: 0;
    padding: 0;
   }
   ul {
    margin: 0;
    padding: 0;
   }
  </style>
  </head>

  <body>
    <h2>Metahakupalvelu</h2>

    <form method="GET" action="{{url('/search')}}">

      <div>
        <input type="text" name="haku" placeholder="search..." pattern="[a-zA-Z0-9]{5,30}" title="Vain [a-zA-Z0-9]{5,30} hyväksytään" value="{{old('haku')}}" {!! $errors->has('haku') ? 'style="background-color: #faa"' : ''!!}>
         <button type="submit">Etsi</button>
       </div>

       @if ($errors->any())
<div style='background-color: #ffdddd;'>
<ul>
     @foreach ($errors->all() as $error)
   <li> {{ $error }}</li>
 @endforeach
   </ul>
</div>
@endif

       <select name="hakupalvelu" id="palvelu">
          <option <?php if($errors->has('hakupalvelu')=="google") echo("selected");?> value="google">Google</option>
          <option <?php if($errors->has('hakupalvelu')=="bing") echo("selected");?> value="bing">Bing</option>
      </select>



</form>

  </body>

</html>