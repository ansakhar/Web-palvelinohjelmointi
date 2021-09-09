<?php
// h3t3-peli-session.php
session_start();

?>
<title>Yksikätinen rosvo</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">

<title>Yksikätinen rosvo</title>
<div id='container'>

<?php include('navbar3.php');?>

<h2>Yksikätinen rosvo</h2>

<form name="form1" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="boxi">
<p style = "font-weight: bold; color: red;"> Nosta pelipanoksesi ja voita viisi kertaa enemmän! <p>

<input type="submit" name="painike" value="Pelaa ja voita!" class="aloita">

</form>

</div>
<?php
if (isset($_GET['painike'])) {
    header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "main.php");
                        };
?>
