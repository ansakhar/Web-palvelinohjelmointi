<?php
// add-basket_cookies.php

// Jos käyttäjä ei ole kirjautunut, ohjataan kirjautumissisvulle:
if ($_COOKIE['app1_islogged'] !== "1") {
    header("Location: http://" . $_SERVER['HTTP_HOST']
                               . dirname($_SERVER['PHP_SELF']) . '/'
                               . "login1.php");
    
exit;
}

?>
<?php
$passat_lkm = isset($_COOKIE['passat_lkm']) ? $_COOKIE['passat_lkm'] : 0;
$multivan_lkm = isset($_COOKIE['multivan_lkm']) ? $_COOKIE['multivan_lkm'] : 0;

if(isset($_GET['id'])) {
$auto = ($_GET['id']);
if ($auto == "passat")
$passat_lkm++;
setcookie ("passat_lkm", "$passat_lkm" , time()+86400);

if ($auto == "multivan")
$multivan_lkm++;
setcookie ("multivan_lkm", "$multivan_lkm" , time()+86400);
}
?>
<?php
header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "h3t2-basket-session.php");
?>


