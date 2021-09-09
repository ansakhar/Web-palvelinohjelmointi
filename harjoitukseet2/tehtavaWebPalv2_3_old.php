<?php
// tehtavaWebPalv2_3.php

// Jos lomakkeen tiedot on lähetetty, käytetään niitä
$aihealue = isset($_GET['aihealue']) ? $_GET['aihealue'] : 'valitse';

$valitse = [["", "", "" ],["", "", ""]];
$urheilu = [["urhejlun", "https://www.mtvuutiset.fi/aihe/urheilu/2963748", "MTVSport" ],
["urhejlun", "https://arenan.yle.fi/tv/program/sport", "YleareenaSport"]];
$musiikki = [["musiikin", "https://areena.yle.fi/audio/ohjelmat/57-bNBwRNd2D", "YleareenaMusiikki" ],
["musiikin", "https://nrj.fi/", "radioNRJ"]];
$kirkot = [["kirkkojen", "http://www.churches.fi/", "suomen Kirkot" ],
["kirkkojen", "https://www.jyvaskylanseurakunta.fi/kaupunginkirkko", "Jyväskylän kaupungin Kirkko"]];

// Valittu valintaruutu merkitään 'selected', jotta
// se voidaan asettaa valituksi lomakkeessa
$valittu[0] = ($aihealue == "urheilu") ? 'selected': '';
$valittu[1] = ($aihealue == "musiikki") ? 'selected': '';
$valittu[2] = ($aihealue == "kirkot") ? 'selected': '';


// Asetetaan sivun taustaväri valinnan mukaiseksi
$head = <<<EOHead
<p> Päivää {${$aihealue}[0][0]} ystävä, tässäpä muutama linkki </p>
<ul>
<li><a style = "color: blue" href="{${$aihealue}[0][1]}">{${$aihealue}[0][2]}</a></li>
<li><a style = "color: blue" href="{${$aihealue}[1][1]}">{${$aihealue}[1][2]}</a></li>
</ul>
EOHead;

// Syöttölomake, jonka tiedot lähetetään skriptille itselleen
// Vain valitun taustavärin option saa määritteen 'selected'
$lomake = <<< EOLomake
<form method="get" action="{$_SERVER['PHP_SELF']}">

<select name="aihealue" size="3" multiple>
  <option value="urheilu" {$valittu[0]}>Urheilu</option>
  <option value="musiikki" {$valittu[1]}>Musiikki</option>
  <option value="kirkot" {$valittu[2]}>Kirkot</option>
</select>
<input type="submit" name="painike" value="Tulosta linkit">
</form>
EOLomake;

// Tulostetaan sivun osat näkyviin
echo $lomake;
if (isset($_GET['aihealue'])) echo $head;

?>