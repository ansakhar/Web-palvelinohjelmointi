<title>cbook-muokkaaform.php</title>

<link rel="stylesheet" href="tyyli.css" type="text/css">
<?php
require_once("/home/AB5121/db-config/CustomerDb.php");
$tunnus = isset($_GET['id']) ? $_GET['id'] : '';
$nimi =  isset($_GET['name']) ? $_GET['name'] : '';
$bd =  isset($_GET['birth_date']) ? $_GET['birth_date'] : '';

?>

<div id='container'>
  <?php include('navbar.php');?>
  <?php echo blank_form($tunnus, $nimi, $bd);?>
</div>


<?php

function blank_form($tunnus, $nimi, $bd) {

    $form = <<<EndOfForm
    <h3>Muokkaa asiakkaan tietoja</h3>

    <div class="boxi">
    <form  method="get" action="cbook-muokkaa.php">
    <input type="hidden" name="id" value='{$tunnus}'>
       Nimi<br>
      <input type="text" name="name" value='{$nimi}'><br>
      Syntymäpäivä<br>
      <input type="text" name="birth_date" value='{$bd}'><br><br>
      <input type="submit" name="nappi" value="Tallenna"><br><br>
      <input type="submit" name="nappi" value="Poista">
    </form>
    </div>
EndOfForm;

    return $form;

}