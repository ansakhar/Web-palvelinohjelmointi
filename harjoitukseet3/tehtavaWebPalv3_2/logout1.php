<?php
// logout1.php

if ($_COOKIE['app1_islogged'] == "1") {
    setcookie("app1_islogged", "0" , time()+86400);
}

header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "h3t2-basket-session.php");
?>