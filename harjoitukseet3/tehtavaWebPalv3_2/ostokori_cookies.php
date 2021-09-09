<?php
// ostokori_cookies.php

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
?>

<title>OstosKoriTorin ostoskorin sisältö</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">

<title>OstosKoriTorin ostoskorin sisältö</title>
<div id='container'>
<?php include('navbar1_cookies.php');?>

<h2>OstosKoriTorin ostoskorin sisältö</h2>


<?php
if(($passat_lkm == 0)&&($multivan_lkm == 0))
echo "<div style='color: red; font-weight: bold; text-align: center; border: 1px solid red; padding: 5px'> Ostoskorisi on tyhjä! </div>";
?>

<div class="boxi">

<table> <tr> 
<td><img src="passat.jpg" height ="250" width = "400"></td>
<td><?php echo "Passat $passat_lkm kpl" ?></td>
</tr>
<tr>
<td><img src="multivan.jpg" height ="250" width = "400"></td>
<td><?php  echo "Multivan $multivan_lkm kpl" ?></td>
</tr>
</table>

</div>
<a href='clear-basket_cookies.php'>Tyhennä ostoskori</a>
</div>


