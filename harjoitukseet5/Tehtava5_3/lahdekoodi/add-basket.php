<?php
// add-basket.php
session_start();

// Jos käyttäjä ei ole kirjautunut, ohjataan kirjautumissisvulle:
if (!isset($_SESSION['app1_islogged']) || $_SESSION['app1_islogged'] !== true) {
    header("Location: http://" . $_SERVER['HTTP_HOST']
                               . dirname($_SERVER['PHP_SELF']) . '/'
                               . "login1.php");
    
exit;
}

?>
<?php

if(isset($_GET['id'])) {
$auto = ($_GET['id']);
if ($auto == "passat")
$_SESSION['passat_lkm']++;

if ($auto == "multivan")
$_SESSION['multivan_lkm']++;
}
?>
<?php
header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "h3t1-basket-session.php");
?>


