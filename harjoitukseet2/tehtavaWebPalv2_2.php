<?php
// tehtavaWebPalv2_2.php

// Jos lomakkeen tiedot on lähetetty, käytetään niitä
$taustavari = isset($_GET['taustavari']) ? $_GET['taustavari'] : '#eee';

// Valittu (1 kpl) taustaväri merkitään 'checked', jotta
// se voidaan asettaa valituksi lomakkeessa
$valittu[0] = ($taustavari == "#ffc") ? 'checked': '';
$valittu[1] = ($taustavari == "#ff0000") ? 'checked': '';
$valittu[2] = ($taustavari == "#0000FF") ? 'checked': '';
$valittu[3] = ($taustavari == "#F5F5DC") ? 'checked': '';
$valittu[4] = ($taustavari == "#C0C0C0") ? 'checked': '';

// Asetetaan sivun taustaväri valinnan mukaiseksi
$head = <<<EOHead
<title>tehtavaWebPalv2_2.php</title>
<style type='text/css'>
body { background-color: $taustavari;}
</style>
EOHead;

// Syöttölomake, jonka tiedot lähetetään skriptille itselleen
$lomake = <<< EOLomake
<form method="get" action="{$_SERVER['PHP_SELF']}">

<p>
<input type="radio" name="taustavari" value="#ffc"{$valittu[0]}>Keltainen<br>
<input type="radio" name="taustavari" value="#ff0000"{$valittu[1]}>Punainen<br>
<input type="radio" name="taustavari" value="#0000FF"{$valittu[2]}>Sininen<br>
<input type="radio" name="taustavari" value="#F5F5DC"{$valittu[3]}>Beige<br>
<input type="radio" name="taustavari" value="#C0C0C0"{$valittu[4]}>Silver
</p>

<input type="submit" name="painike" value="Väritä">
</form>
EOLomake;

// Tulostetaan sivun osat näkyviin
echo $head;
echo $lomake;

?>