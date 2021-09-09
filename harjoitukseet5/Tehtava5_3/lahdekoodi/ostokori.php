<?php
// ostokori.php
session_start();

// Jos käyttäjä ei ole kirjautunut, ohjataan kirjautumissisvulle:
if (!isset($_SESSION['app1_islogged']) || $_SESSION['app1_islogged'] !== true) {
    header("Location: http://" . $_SERVER['HTTP_HOST']
                               . dirname($_SERVER['PHP_SELF']) . '/'
                               . "login1.php");
    
exit;
}

?>

<title>OstosKoriTorin ostoskorin sisältö</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">

<title>OstosKoriTorin ostoskorin sisältö</title>
<div id='container'>
<?php include('navbar1.php');?>

<h2>OstosKoriTorin ostoskorin sisältö</h2>


<?php
if(($_SESSION['passat_lkm'] == 0)&&($_SESSION['multivan_lkm'] == 0))
echo "<div style='color: red; font-weight: bold; text-align: center; border: 1px solid red; padding: 5px'> Ostoskorisi on tyhjä! </div>";
?>

<div class="boxi">

<table> <tr> 
<td><img src="passat.jpg" height ="250" width = "400"></td>
<td><?php echo "Passat {$_SESSION['passat_lkm']} kpl" ?></td>
</tr>
<tr>
<td><img src="multivan.jpg" height ="250" width = "400"></td>
<td><?php  echo "Multivan {$_SESSION['multivan_lkm']} kpl" ?></td>
</tr>
</table>

</div>
<a href='clear-basket.php'>Tyhennä ostoskori</a>
</div>


