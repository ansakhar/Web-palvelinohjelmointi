<?php $errMsg = muokkaa_form(); ?>


<title>cbook-muokkaa.php</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">

<div id='container'>
  <?php include('navbar.php');?>
  <?php echo $errMsg;?>
</div>


<?php
/*******************  PHP-toiminnot ******** ***********/

/*******************  Tallennetaan tiedot  ********************/
function muokkaa_form() {

    require_once("/home/AB5121/db-config/CustomerDb.php");
    $customerObj = new CustomersDb();

    $errMsg = '';
    $success = 0;

    // Datan vastaanotto
    $id       = isset($_GET['id'])       ? $_GET['id']       : '';
    $name       = isset($_GET['name'])       ? $_GET['name']       : '';
    $birth_date = isset($_GET['birth_date']) ? $_GET['birth_date'] : '';
    $nappi = isset($_GET['nappi']) ? $_GET['nappi'] : '';

    if ($nappi == "Tallenna") {
    if (strlen($name)>=1 AND strlen($birth_date)>=1) {
        $success = $customerObj->muokkaaCustomer($id, $name, $birth_date);
    }}
    elseif
    ($nappi == "Poista") {
        $success = $customerObj->poistaCustomer($id);
}

    if ($success) {
        header("Location: http://" . $_SERVER['HTTP_HOST']
        . dirname($_SERVER['PHP_SELF']) . '/'
        . "cbook-list.php");
    } else {
        $errMsg = "<p>Tallentamisessa jotain ongelmaa</p>";
        return $errMsg;
    }


}