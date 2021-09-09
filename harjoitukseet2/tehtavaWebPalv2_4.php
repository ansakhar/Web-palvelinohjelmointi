<?php
// tehtavaWebPalv2_4.php

// Jos painiketta painetaan, käytetään niitä
$msg = isset($_GET['painike']) ? $_GET['msg'] : "";

if (isset($_GET['painike'])) 
  {if ($msg == "") $msg = "Yksi kerta riittaa"; 
    else {
   if ($msg == "Yksi kerta riittaa") $msg = "Kaksi kerta riittaa"; 
    else {
   if ($msg == "Kaksi kerta riittaa") $msg = "Kolme kerta riittaa";
    else {
   if ($msg == "Kolme kerta riittaa") $msg = "";}}}};

//Lomake
$lomake = <<< EOLomake
<form method="get" action="{$_SERVER['PHP_SELF']}">
<input type="submit" name="painike" value="Paina minua">
<input type="text" name="msg" value="{$msg}">
</form>
EOLomake;

// Tulostetaan sivun osat näkyviin
echo $lomake;
?>