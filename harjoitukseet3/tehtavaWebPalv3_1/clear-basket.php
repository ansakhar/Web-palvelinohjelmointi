<?php
session_start();
$_SESSION['passat_lkm'] = 0;
$_SESSION['multivan_lkm'] = 0;

?>
<html>
<body>

<?php
header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "ostokori.php");
?>

</body>
</html>