<?php
// h3t1-basket-session.php
session_start();

?>
<title>OstosKoriTori</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">

<title>OstosKoriTori</title>
<div id='container'>
<?php include('navbar1.php');?>

<h2>OstosKoriTori</h2>


<div class="boxi">

<p>Lisää auto ostoskoriin klikkaamalla kuvaa!</p>
<table> <tr> 
<td> <figure> <a href="add-basket.php?id=passat"><img src="passat.jpg" height ="250" width = "400"></a> <figcaption>Passat</figcaption> </figure></td>
<td> <figure> <a href="add-basket.php?id=multivan"><img src="multivan.jpg" height ="250" width = "400"></a> <figcaption>Multivan</figcaption> </figure></td>
</tr>
</table>

</div>

</div>
<?php

?>
