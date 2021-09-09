<div style="text-align: right; margin-top: 10px;padding-bottom: 10px;">
<span style="background-color: #ddd;">Cbook</span>
<em>by QaD Solutions</em>

</div>
<form action="cbook-list.php" method="post" >
    [ <a href='cbook-list.php'>Listaa</a> ]
    [ <a href='cbook-addform.php'>Lisää</a> ]
    <input type="text" name="filter" placeholder="Nimihaku" autocomplete="off"  onkeyup = "submit();"  value = <?php if ( isset($_POST['filter'])) echo $_POST['filter'];?> >
</form>

<hr>

