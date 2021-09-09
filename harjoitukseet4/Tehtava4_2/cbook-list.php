<title>cbook-list.php</title>

<link rel="stylesheet" href="tyyli.css" type="text/css">

<div id='container'>
  <?php include('navbar.php');?>
  <?php page_content();?>
</div>

<?php
/*******************  PHP-toiminnot ******** ***********/

/***********  Datan hakeminen tietokannasta  ***********/
function page_content() {

    require_once("/home/AB5121/db-config/CustomerDb.php");
    $customerObj = new CustomersDb();
    
    $tyhja_hakusana = "";
    $tyhja_hakusana = isset($_POST['filter']) ? $_POST['filter'] : '';

    //echo "filter = " . $tyhja_hakusana;
    $customers = $customerObj->getCustomers($tyhja_hakusana);

    if (count($customers)>=1) echo do_html_table($customers);
    //var_dump($customers); // ks. tarvittaessa
}

/***********  Asiakaslista HTML-taulukkona  ***********/
function do_html_table($customers) {
    $html = "<h3> Listaa asiakkaat </h3>";
    
    $html .= "<table>";
    // Otsikkorivi
    $html .= "<tr>";
    $html .= "<th> Name </th>";
    $html .= "<th> Birth_date </th>";
    $html .= "<th> Created_at </th>";
    $html .= "</tr>";

    // Tulosrivit
    foreach ($customers as $customer) {    
        $html .= "<tr>" .
                 "<td><a href='cbook-muokkaaform.php?id=$customer->id&name=$customer->name&birth_date=$customer->birth_date'>$customer->name</a></td>" .
                 "<td>$customer->birth_date</td>" .
                 "<td>$customer->created_at</td>" .
                 "</tr>";
    }
    $html .= "</table>";

    return $html;
}