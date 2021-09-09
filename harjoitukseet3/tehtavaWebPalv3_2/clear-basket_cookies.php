<?php
setcookie("passat_lkm", "" , time()+86400);
setcookie("multivan_lkm", "" , time()+86400);
?>
<html>
<body>

<?php
header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "ostokori_cookies.php");
?>

</body>
</html>