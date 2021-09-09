<?php
// logout1.php
session_start();

if (isset($_SESSION['app1_islogged'])) {
    unset($_SESSION['app1_islogged']);
}

header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "h3t1-basket-session.php");
?>