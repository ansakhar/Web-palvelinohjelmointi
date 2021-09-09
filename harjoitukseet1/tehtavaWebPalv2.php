<title>Tehtava 2: TehtavaWebPalv2.html</title>

<?php
$euro = "";
if (isset($_GET['painike'])) $euro = $_GET['euro'];
?>

<form method="get"
      action="<?php echo $_SERVER['PHP_SELF']?>">
Euro:<br><input type="text" name="euro" value="<?php echo $euro;?>">

<input type="submit" name="painike" value="Laskea">
</form>

<?php

if (!isset($_GET['painike'])) exit();

$markka = round(($_GET['euro'] / 0.51), 2);
echo "{$_GET['euro']} euroa on <strong>{$markka}</strong> markkaa<br>";

?>