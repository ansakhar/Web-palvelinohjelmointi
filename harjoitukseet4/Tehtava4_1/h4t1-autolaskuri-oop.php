<title>Autolaskuri</title>
<h3 style=background-color:#fed;color:#000>Autolaskuri</h3>

<?php
// h4t1-autolaskuri-oop.php

$vw_lkm = 0;
$opel_lkm = 0;
$toyota_lkm = 0;

if (isset($_GET['painike'])) {
    $vw_lkm = $_GET['vw_lkm'];
    $opel_lkm = $_GET['opel_lkm'];
    $toyota_lkm = $_GET['toyota_lkm'];
    $painike  = $_GET['painike'];
} 

// Tarvittavien luokkien automaattinen lataaminen tarvittaessa
function __autoload($class_name) {
    require_once $class_name . '.class.php';
 }

$auto = new Autolaskuri(0, 0, 0);

$auto->set_autot($vw_lkm, $opel_lkm, $toyota_lkm);

if (isset($_GET['painike'])) {
    if ($painike == "[ VW |") {
        $auto->set_vw($vw_lkm + 1);
 }
 elseif ($painike == " Opel |") {
    $auto->set_opel($opel_lkm + 1);
 }
 elseif ($painike == " Toyota |") {
    $auto->set_toyota($toyota_lkm + 1);
 }
 else {
    $auto->set_autot(0, 0, 0);
 }

}

?>
<form name ="form" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<input type="hidden" value="<?php echo $auto->get_vw();?>" name="vw_lkm">
<input type="hidden" value="<?php echo $auto->get_opel();?>" name="opel_lkm">
<input type="hidden" value="<?php echo $auto->get_toyota();?>" name="toyota_lkm">

<input style="border: none; color: blue; padding: 0;" type="submit" value="[ VW |" name="painike">
<input style="border: none; color: blue;padding: 0;" type="submit" value=" Opel |" name = "painike">
<input style="border: none; color: blue; padding: 0;" type="submit" value=" Toyota |" name = "painike">
<input style="border: none; padding: 0;" type="submit" value=" Nollaa ]" name = "painike">
</form>

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