<?php
// tilille.php
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

$siirto = "";
if (isset($_GET['painike3'])) $siirto = $_GET['siirto'];

?>

<form name="form2" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="boxi">
<br>
Siirtää pelitililleni: <input type="text" name="siirto" value="<?php echo $siirto;?>">
<br><br>
<input type="submit" name="painike3" value="Siirtää" class="pelata">

<?php

if (isset($_GET['painike3'])) $_SESSION['saldo'] += $siirto;
?>

<h2>
<?php
echo "Saldosi on {$_SESSION['saldo']} eur";
?>
</h2>

</form>
</div>
