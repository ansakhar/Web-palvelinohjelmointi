<?php
// main.php
session_start();

// Jos käyttäjä ei ole kirjautunut, ohjataan kirjautumissisvulle:
if (!isset($_SESSION['peli']) || $_SESSION['peli'] !== true) {
    header("Location: http://" . $_SERVER['HTTP_HOST']
                               . dirname($_SERVER['PHP_SELF']) . '/'
                               . "login3.php");
    
exit;
}

?>
<title>Yksikätinen rosvo</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">

<title>Yksikätinen rosvo</title>
<div id='container'>
<?php include('navbar3.php');

$images = array("Kuva1.jpg", "Kuva2.jpg", "Kuva3.jpg");

$random_images[0]  = array_rand($images,1);
$random_images[1]  = array_rand($images,1);
$random_images[2]  = array_rand($images,1);

$pelipanos = 100;
if (isset($_GET['painike2'])) $pelipanos = $_GET['pelipanos'];

?>

<form name="form1" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="boxi">
<br>
Pelipanos: <input type="text" name="pelipanos" value="<?php echo $pelipanos;?>">
<br><br>
<input type="submit" name="painike2" value="Painaa!" class="pelata">

<?php

if (isset($_GET['painike2'])) {

    $_SESSION['saldo'] -= $pelipanos;
    echo '<table> <tr> 
<td> <img src="kuvat4/' . $images[$random_images[0]] .'" height ="200" width = "200" /> </a> </td>
<td> <img src="kuvat4/' . $images[$random_images[1]] .'" height ="200" width = "200" /> </a> </td>
<td> <img src="kuvat4/' . $images[$random_images[2]] .'" height ="200" width = "200" /> </a> </td>
</tr>
</table>';

  if(($random_images[0] == $random_images[1])&&($random_images[1] == $random_images[2])) {
   $palkinto = $pelipanos*5;
   echo "<div style='color: red; font-weight: bold'> Onnea! Sinä voitit $palkinto eur!</div>";
   $_SESSION['saldo'] += $palkinto;
  }
   else echo "Yritä uudelleen!";

};
?>
<h2>
<?php
echo "Saldosi on {$_SESSION['saldo']} eur";
?>
</h2>

</form>
</div>
