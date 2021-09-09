<?php

// Kirjautumattomat pääsevät kirjautumaan
if (!isset($_SESSION['app1_islogged']) || $_SESSION['app1_islogged'] !== true) {
   echo "[<a href='h3t1-basket-session.php'>Tee ostoksia</a>] ";
   echo "[ <a href='ostokori.php'>Ostokorin sisältö</a> ]";
} else { // ja kirjautuneet uloskirjautumaan
   echo "[<a href='h3t1-basket-session.php'>Tee ostoksia</a>] ";
   echo "[ <a href='ostokori.php'>Ostokorin sisältö</a> ]";
   echo "      ";
   echo "[Kirjautunut: <span style='background: yellow;'>{$_SESSION['uid']}</span> ] ";
   echo "[<a href='logout1.php' style='color: green;'>Kirjaudu ulos</a>]";
}