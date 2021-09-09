<!DOCTYPE html>
<html>

  <head>
    <title>Metahakupalvelu</title>
  </head>

  <body>
    <h2>Metahakupalvelu</h2>

    <form method="GET" action="{{url('/search')}}">

      <div>
        <input type="text" name="haku" placeholder="search...">
         <button type="submit">Etsi</button>
       </div>


       <select name="hakupalvelu" id="palvelu">
          <option value="google">Google</option>
          <option value="bing">Bing</option>
      </select>


     </form>

  </body>

</html>