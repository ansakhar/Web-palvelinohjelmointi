<?php
// tehtavaWebPalv2_5.php

// Jos lomakkeen tiedot on lähetetty, käytetään niitä
/*$nimi = isset($_GET['nimi']) ? $_GET['nimi'] : '';
$kysymys1 = isset($_GET['kysymys1']) ? $_GET['kysymys1'] : '';
$kysymys2 = isset($_GET['kysymys2']) ? $_GET['kysymys2'] : '';
$vastaus3_1 = isset($_GET['vastaus3_1']) ? $_GET['vastaus3_1'] : '';
$vastaus3_2 = isset($_GET['vastaus3_2']) ? $_GET['vastaus3_2'] : '';
$vastaus3_3 = isset($_GET['vastaus3_3']) ? $_GET['vastaus3_3'] : '';
$vastaus4_1 = isset($_GET['vastaus4_1']) ? $_GET['vastaus4_1'] : '';
$vastaus4_2 = isset($_GET['vastaus4_2']) ? $_GET['vastaus4_2'] : '';
$vastaus4_3 = isset($_GET['vastaus4_3']) ? $_GET['vastaus4_3'] : '';*/

echo "<h3>GET-metodilla saapunut data</h3>\n";
 foreach($_GET as $h=>$v)
       isset($h) ? $h : '';

// Valittu (1 kpl) taustaväri merkitään 'checked', jotta
// se voidaan asettaa valituksi lomakkeessa
$valittu1[0] = ($kysymys1 == "Oikea") ? 'checked': '';
$valittu1[1] = ($kysymys1 == "Väärä1") ? 'checked': '';
$valittu1[2] = ($kysymys1 == "Väärä2") ? 'checked': '';

$valittu2[0] = ($kysymys2 == "Väärä1") ? 'selected': '';
$valittu2[1] = ($kysymys2 == "Oikea") ? 'selected': '';
$valittu2[2] = ($kysymys2 == "Väärä2") ? 'selected': '';

$valittu3[0] = ($vastaus3_1 == "Oikea1") ? 'checked': '';
$valittu3[1] = ($vastaus3_2 == "Väärä") ? 'checked': '';
$valittu3[2] = ($vastaus3_3 == "Oikea2") ? 'checked': '';

$valittu4[0] = ($vastaus4_1 == "Oikea1") ? 'checked': '';
$valittu4[1] = ($vastaus4_2 == "Oikea2") ? 'checked': '';
$valittu4[2] = ($vastaus4_3 == "Oikea3") ? 'checked': '';

$head = <<<EOHead
<p style = "font-weight: bold;">
Haluatko miljonääriksi
<p style = "font-style: italic;">
Vastaa oikein! Voita miljoona! </p>
</p>
EOHead;

//Pisteiden laskeminen
$result = <<<EOHead
EOHead;

$pisteet = 0;

if (isset($_GET['painike']))
 {
  if ($valittu1[0] == 'checked') $pisteet ++;
  if ($valittu2[1] == 'selected') $pisteet += 2; else $pisteet -= 2;
  if ($valittu3[0] == 'checked') $pisteet += 3; 
  if ($valittu3[2] == 'checked') $pisteet += 3; 
  if ($valittu3[1] == 'checked') $pisteet -= 3;
  if (($valittu3[0] == '')&&($valittu3[1] == '')&&($valittu3[2] == '')) $pisteet -= 3;
  if ($valittu4[0] == 'checked') $pisteet += 3; 
  if ($valittu4[2] == 'checked') $pisteet += 3; 
  if ($valittu4[1] == 'checked') $pisteet += 3;
  if (($valittu4[0] == '')&&($valittu4[1] == '')&&($valittu4[2] == '')) $pisteet -= 3;

  $head = <<<EOHead
  <p style = "font-weight: bold;">Haluatko miljonääriksi</p>
  EOHead;

  if ($pisteet == 18)
  $result = <<<EOHead
  <p style = "font-style: italic;">
  $nimi, sinun tulos on $pisteet pistettä.<br>
  <div style = "font-size: 22px; font-style: italic; color: blue; font-weight: bold">Onneksi olkoon! Voitit miljoonan!</div>
  </p>
  EOHead; else
  $result = <<<EOHead
  <p style = "font-style: italic;">$nimi, sinun tulos on vain $pisteet pistettä.</p>
  EOHead;
 };
 

// Syöttölomake, jonka tiedot lähetetään skriptille itselleen
$lomake = <<< EOLomake
<form method="get" action="{$_SERVER['PHP_SELF']}">

<p>
<div style = "text-decoration: overline; display: inline; background: #e0e0eb;">
1. Mikä seuraavista on oikea vastaus?
</div><br>
<input type="radio" name="kysymys1" value="Oikea"{$valittu1[0]}>Oikea vastaus<br>
<input type="radio" name="kysymys1" value="Väärä1"{$valittu1[1]}>Väärä vastaus<br>
<input type="radio" name="kysymys1" value="Väärä2"{$valittu1[2]}>Väärä vastaus<br>
</p>

<p>
<div style = "text-decoration: overline; display: inline; background: #e0e0eb;">
2. Mikä kirjainlyhenne PHP tarkoiiaa puhuttaessa Web-ohjelmoinnista?
</div><br>
<select name="kysymys2" size="1">
  <option value="Väärä1"{$valittu2[0]}>PHP: selaimesta riippumaton JavaScript-tulkki</option>
  <option value="Oikea"{$valittu2[1]}>PHP: Hypertext Preprocessor</option>
  <option value="Väärä2"{$valittu2[2]}>PHP: JavaScript-kirjasto, joka käyttää JSX-syntaksia </option>
</select>
</p>

<p>
<div style = "text-decoration: overline; display: inline; background: #e0e0eb;">
3. PHP-skriptit
</div><br>
  <input type="checkbox" name="vastaus3_1" value="Oikea1"{$valittu3[0]}>toimivat ainoastaan Unix- ja Linux-käyttöjärjestelmissä<br>
  <input type="checkbox" name="vastaus3_2"  value="Väärä"{$valittu3[1]}>tarvitsevat toimiakseen Perl-tulkin<br>
  <input type="checkbox" name="vastaus3_3"  value="Oikea2"{$valittu3[2]}>ovat ohjelmakoodia,joka upotetaan HTML-sivun lomaan<br>
</select>
</p>

<p>
<div style = "text-decoration: overline; display: inline; background: #e0e0eb;">
4. PHP-kielessä
</div><br>
  <input type="checkbox" name="vastaus4_1" value="Oikea1"{$valittu4[0]}>muuttujat on aina esiteltävä ennen käyttöä<br>
  <input type="checkbox" name="vastaus4_2"  value="Oikea2"{$valittu4[1]}>taulukoissa voi käyttää ainoastaan kokonaislukuindeksejä<br>
  <input type="checkbox" name="vastaus4_3"  value="Oikea3"{$valittu4[2]}>on boolean-tietotyyppi<br>
</select>
</p>

Nimi: <input type="text" name="nimi" value="$nimi"><br>

<input type="submit" name="painike" value="Lähetä">
</form>
EOLomake;

// Tulostetaan sivun osat näkyviin
echo $head;
echo $result;
echo $lomake;

?>