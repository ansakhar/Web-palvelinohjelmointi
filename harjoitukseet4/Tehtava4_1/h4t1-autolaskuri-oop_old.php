<title>Autolaskuri</title>
<h3 style=background-color:#fed;color:#000>Autolaskuri</h3>

<?php
// h4t1-autolaskuri-oop.php

// Tarvittavien luokkien automaattinen lataaminen tarvittaessa
function __autoload($class_name) {
    require_once $class_name . '.class.php';
 }

$auto = new Autolaskuri(0, 0, 0);

$vw_lkm = $auto->get_vw();; 
$opel_lkm = $auto->get_opel();
$toyota_lkm = $auto->get_toyota();;
$painike = '';

if (isset($_POST['painike'])) {
    $vw_lkm = $_POST['vw_lkm'];
    $opel_lkm = $_POST['opel_lkm'];
    $toyota_lkm = $_POST['toyota_lkm'];
    $painike  = $_POST['painike'];
}

// Alustetaan tai päivitetään autojen lukumääriä:
// Muodolliset parametrit ovat viittauksia, joten
// muutetut arvot välittyvät "takaisin" kutsuvaan
// ohjelmalohkooon

laske_lkm($vw_lkm, $opel_lkm, $toyota_lkm, $painike);

$auto->set_autot($vw_lkm, $opel_lkm, $toyota_lkm);

tee_lomake($vw_lkm, $opel_lkm, $toyota_lkm);


function laske_lkm(&$vw_lkm, &$opel_lkm, &$toyota_lkm, $nappi) {
    if ($nappi == "[ VW |") {
    $vw_lkm = $vw_lkm + 1;
 }
 elseif ($nappi == " Opel |") {
    $opel_lkm = $opel_lkm + 1;
 }
 elseif ($nappi == " Toyota |") {
    $toyota_lkm = $toyota_lkm + 1;
 }
    // Painettiin Nollaa-painiketta
 elseif ($nappi == " Nollaa ]") {
    $vw_lkm = 0;
    $opel_lkm = 0;
    $toyota_lkm = 0;
 }
}

// Tehdään lomake piilokenttineen
function tee_lomake($vw_lkm, $opel_lkm, $toyota_lkm) {
?>
<form name ="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<input type="hidden" value="<?php echo "$vw_lkm"?>" name="vw_lkm">
<input type="hidden" value="<?php echo "$opel_lkm"?>" name="opel_lkm">
<input type="hidden" value="<?php echo "$toyota_lkm"?>" name="toyota_lkm">

<input style="border: none; color: blue; padding: 0;" type="submit" value="[ VW |" name="painike">
<input style="border: none; color: blue;padding: 0;" type="submit" value=" Opel |" name = "painike">
<input style="border: none; color: blue; padding: 0;" type="submit" value=" Toyota |" name = "painike">
<input style="border: none; padding: 0;" type="submit" value=" Nollaa ]" name = "painike">
</form>

<?php
}
?>

<table> 
<tr>
      <td><?php echo "Volkswagenit "; ?></td>
      <td> : </td>
      <td><?php echo $auto->get_vw(). " kpl."; ?></td>
</tr>
<tr>
      <td><?php echo "Opelit......... "; ?></td>
      <td> : </td>
      <td><?php echo $auto->get_opel(). " kpl."; ?></td>
</tr>
<tr>
      <td><?php echo "Toyotat....... "; ?></td>
      <td> : </td>
      <td><?php echo $auto->get_toyota(). " kpl."; ?></td>
</tr>
</table>