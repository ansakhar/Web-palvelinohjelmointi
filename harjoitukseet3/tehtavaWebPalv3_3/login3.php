<?php
// login.php
session_start();
$kayttajat  = [
    ["testi", "sala"],
    ["testi2", "sala2"],
    ["testi3", "sala3"]
];

$errmsg = '';
if (isset($_POST['uid']) AND isset($_POST['passwd'])) {
    // Kovakoodatut tunnus ja salasana
    if (in_array([$_POST['uid'], $_POST['passwd']], $kayttajat))
  {
        // Kirjautuminen ok, merkintä sessiotauluun
        $_SESSION['peli'] = true;
        $_SESSION['saldo'] = 500;
        
        
        $_SESSION['uid'] = $_POST['uid']; // Tässä mukavuussyistä, voidaan tulostella yms.
         header("Location: http://" . $_SERVER['HTTP_HOST']
                                    . dirname($_SERVER['PHP_SELF']) . '/'
                                    . "h3t3-peli-session.php");
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
<div style = "font-weight: bold">Kirjoitta tunnus ja salasana:
"testi" ja "sala", tai "testi2" ja "salasana2", tai "testi3" ja "salasana3". </div><br>
Tunnus:<br><input type="text" name="uid" size="30"><br>
Salasana:<br><input type="text" name="passwd" size="30"><br>
<input type='submit' name='action' value='Kirjaudu'>
<br>
</form>