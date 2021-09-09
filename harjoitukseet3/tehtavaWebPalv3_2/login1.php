<?php
// login.php

$errmsg = '';
if (isset($_POST['uid']) AND isset($_POST['passwd'])) {
    // Kovakoodatut tunnus ja salasana
    if ($_POST['uid'] === 'testi2' AND $_POST['passwd'] === 'sala2') {
        $app1_islogged = 1;
        setcookie ("app1_islogged", "$app1_islogged" , time()+86400);
        $uid = ($_POST['uid']);
        setcookie ("uid", "$uid" , time()+86400);// Tässä mukavuussyistä, voidaan tulostella yms.
        header("Location: http://" . $_SERVER['HTTP_HOST']
                                    . dirname($_SERVER['PHP_SELF']) . '/'
                                    . "h3t2-basket-session.php");
        exit;
    } else {
        $errmsg = '<span style="background: yellow;">Tunnus/Salasana väärin!';
    }
}
?>

<title>Kirjautusmislomake</title>

<?php
if ($errmsg != '') echo $errmsg;
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"
style=color:#000;background-color:#eee>
<div>Kirjoitta tunnus: "testi2" ja salasana: "sala2".</div><br>
Tunnus:<br><input type="text" name="uid" size="30"><br>
Salasana:<br><input type="text" name="passwd" size="30"><br>
<input type='submit' name='action' value='Kirjaudu'>
<br>
</form>