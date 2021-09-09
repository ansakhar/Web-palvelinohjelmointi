<?php

// Kirjautumattomat pääsevät kirjautumaan
if (!isset($_SESSION['peli']) || $_SESSION['peli'] !== true) {
   echo "[<a href='h3t3-peli-session.php'>Kotisivu</a>] ";
   echo "[<a href='tilille.php'>Siirtää tilille</a>] ";
} else { // ja kirjautuneet uloskirjautumaan
   echo "[<a href='h3t3-peli-session.php'>Kotisivu</a>] ";
   echo "[<a href='tilille.php'>Siirtää tilille</a>] ";
   echo "      ";
   echo "[Kirjautunut: <span style='background: yellow;'>{$_SESSION['uid']}</span> ] ";
   echo "[<a href='logout3.php' style='color: green;'>Kirjaudu ulos</a>]";
}