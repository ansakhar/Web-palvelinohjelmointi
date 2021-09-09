<?php

echo '<strong>Satunnaisesti valitut luvut 1-100:</strong> <br>';
echo (rand(1, 100). "<br>");
echo (rand(1, 100). "<br>");
echo (rand(1, 100). "<br><br>");

$images = array("Kuva1.jpg", "Kuva2.jpg", "Kuva3.jpg", "Kuva4.jpg", "Kuva5.jpg", "Kuva6.jpg", "Kuva7.jpg");

$random_images  = array_rand($images,3);

echo '<strong>Satunnaisesti valitut kuvanumerot:</strong> <br>';
echo (($random_images[0] + 1). "<br>");
echo (($random_images[1] + 1). "<br>");
echo (($random_images[2] + 1). "<br>");

echo '<table> <tr> 
<td> <figure> <img src="kuvat4/' . $images[$random_images[0]] .'" height ="200" width = "200" /> <figcaption>' . $images[$random_images[0]] . ' </figcaption> </figure> </a> </td>
<td> <figure> <img src="kuvat4/' . $images[$random_images[1]] .'" height ="200" width = "200" /> <figcaption>' . $images[$random_images[1]] . ' </figcaption> </figure> </a> </td>
<td> <figure> <img src="kuvat4/' . $images[$random_images[2]] .'" height ="200" width = "200" /> <figcaption>' . $images[$random_images[2]] . ' </figcaption> </figure> </a> </td>
</tr>
</table>';
?>
