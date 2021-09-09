<?php
// tehtavaWebPalv2_3.php

//linkit:
$urheilu = [["urhejlun", "https://www.mtvuutiset.fi/aihe/urheilu/2963748", "MTVSport" ],
["urhejlun", "https://arenan.yle.fi/tv/program/sport", "YleareenaSport"]];
$musiikki = [["musiikin", "https://areena.yle.fi/audio/ohjelmat/57-bNBwRNd2D", "YleareenaMusiikki" ],
["musiikin", "https://nrj.fi/", "radioNRJ"]];
$kirkot = [["kirkkojen", "http://www.churches.fi/", "suomen Kirkot" ],
["kirkkojen", "https://www.jyvaskylanseurakunta.fi/kaupunginkirkko", "Jyväskylän kaupungin Kirkko"]];

// Jos lomakkeen tiedot on lähetetty, käytetään niitä
$aihealue = isset($_GET['aihealue']) ? $_GET['aihealue'] : [];

// Valittu valintaruutu merkitään 'selected', jotta
// se voidaan asettaa valituksi lomakkeessa
$valittu[0] = (in_array("urheilu", $aihealue)) ? 'selected': '';
$valittu[1] = (in_array("musiikki", $aihealue)) ? 'selected': '';
$valittu[2] = (in_array("kirkot", $aihealue)) ? 'selected': '';

// Syöttölomake, jonka tiedot lähetetään skriptille itselleen
// Vain valitun valintaruudun option saa määritteen 'selected'
$lomake = <<< EOLomake
<form method="get" action="{$_SERVER['PHP_SELF']}">

<select name="aihealue[]" size="3" multiple="multiple">
  <option value="urheilu" {$valittu[0]}>Urheilu</option>
  <option value="musiikki" {$valittu[1]}>Musiikki</option>
  <option value="kirkot" {$valittu[2]}>Kirkot</option>
</select>
<input type="submit" name="painike" value="Tulosta linkit">
</form>
EOLomake;

// Tulostetaan sivun osat näkyviin
echo $lomake;

foreach ($aihealue as $t)
  {
    echo '<p> Päivää ' .$$t[0][0]. ' ystävä, tässäpä muutama linkki </p>
     <ul>
       <li><a style = "color: blue" href="' .$$t[0][1]. '">' .$$t[0][2]. '</a></li>
       <li><a style = "color: blue" href="' .$$t[1][1]. '">' .$$t[1][2]. '</a></li>
    </ul>';
  }
 

?>