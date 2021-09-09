<title>Tehtava 5: TehtavaWebPalv5.php</title>

<?php

$table = array("Eka rivi", "Toka rivi", "Koka rivi", "Neka rivi", "Vika rivi", "Kuka rivi", "Seka rivi");
$colors = array("#ff0", "#fff");

function taustaVari($array, $flag) {
	if ($flag == true) {
	return $array[0];
}
else {
	return $array[1];
}
}

echo '<div style =
		"border: dashed 2px;
		float: left;
		padding: 0 10px">';

$vari = true;

for ($i = 1; $i < 3; $i++) {

echo '<table>';

foreach ($table as $arvo) {
    echo '<tr style = "background-color: ' .taustaVari($colors, $vari) . '"> <td>' . $arvo . '</a> </td> </tr>';
$vari = !$vari;
}

echo '</table> <br>';
}

echo '</div>';

?>