<title>Tehtava 3: TehtavaWebPalv3.html</title>

<?php
$star = "";
if (isset($_GET['painike'])) $star = $_GET['star'];
?>

<form method="get"
      action="<?php echo $_SERVER['PHP_SELF']?>">
Kuinka monta tähteä haluat piirtää?<br><input type="text" name="star" value="<?php echo $star;?>">

<input type="submit" name="painike" value="Piirrä tähdet">
</form>

<?php

if (!isset($_GET['painike'])) exit();

function piirra_tahdet($luku) {
   for ($i = 0; $i < $luku; $i++) {
   echo "*";
}
}

piirra_tahdet($_GET['star']);


?>