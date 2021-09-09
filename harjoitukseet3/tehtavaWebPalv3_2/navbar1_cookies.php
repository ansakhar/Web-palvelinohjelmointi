<?php

// Kirjautumattomat pääsevät kirjautumaan
if ($_COOKIE['app1_islogged'] !== "1") {
   echo "[<a href='h3t2-basket-session.php'>Tee ostoksia</a>] ";
   echo "[ <a href='ostokori_cookies.php'>Ostokorin sisältö</a> ]";
} else { // ja kirjautuneet uloskirjautumaan
   echo "[<a href='h3t2-basket-session.php'>Tee ostoksia</a>] ";
   echo "[ <a href='ostokori_cookies.php'>Ostokorin sisältö</a> ]";
   echo "      ";
   echo "[Kirjautunut: <span style='background: yellow;'>{$_COOKIE['uid']}</span> ] ";
   echo "[<a href='logout1.php' style='color: green;'>Kirjaudu ulos</a>]";
}