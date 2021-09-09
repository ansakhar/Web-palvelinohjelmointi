<?php
// tehtavaWebPalv2_1.php

// Jos lomakkeen tiedot on lähetetty, käytetään niitä
$vasy = isset($_GET['vasy']) ? $_GET['vasy'] : '';
$perjantai = isset($_GET['parjantai']) ? $_GET['parjantai'] : '';
$paa = isset($_GET['paa']) ? $_GET['paa'] : '';

// Valittu valintaruutu merkitään 'checked', jotta
// se voidaan asettaa valituksi lomakkeessa
$valittu[0] = ($vasy == "Väsyttää ankarasti") ? 'checked': '';
$valittu[1] = ($perjantai == "Perjantai ankarasti") ? 'checked': '';
$valittu[2] = ($paa == "Pää pipi ankarasti") ? 'checked': '';


// Tulostetaan sivun ylälaitaan tekstin valitsemiesi valintaruutujen mukaan
$head = <<<EOHead
<p style = "color: blue">$vasy</p>
<p style = "color: blue">$perjantai</p>
<p style = "color: blue">$paa</p>
EOHead;

// Syöttölomake, jonka tiedot lähetetään skriptille itselleen
$lomake = <<< EOLomake
<form method="get" action="{$_SERVER['PHP_SELF']}">

<p>
<input type="checkbox" name="vasy" value="Väsyttää ankarasti"{$valittu[0]}>Väsy<br>
<input type="checkbox" name="parjantai" value="Perjantai ankarasti"{$valittu[1]}>Perjantai<br>
<input type="checkbox" name="paa" value="Pää pipi ankarasti"{$valittu[2]}>Pää<br>
</p>

<input type="submit" name="painike" value="Kerro">
</form>
EOLomake;

// Tulostetaan sivun osat näkyviin
echo $head;
echo $lomake;

?>