<?php
// logout1.php
session_start();

if (isset($_SESSION['peli'])) {
    unset($_SESSION['peli']);
}

header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "h3t3-peli-session.php");
?>