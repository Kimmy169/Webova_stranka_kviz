<!DOCTYPE html>
<html>
<head>
</head>

<link rel="icon" type="image/x-icon" href="D:\GitHub projects\Webov-st-rnka-kv-z\icons8-question-mark-16.png">
<body>
<h1 style="text-align:center;">Kvíz všeobecných znalostí</h1>
<h2 style="text-align:center">Kolik hráčů bude hrát ?</h2>


</form>
</body>
</html>
Počet hráčů:
<input type="radio" name "PocetHracu"
<?php
if (isset($pocetHracu) && pocetHracu == 1) echo "checked";
?>
value=1> 1 hráč
<input type="radio" name "PocetHracu"
<?php
if (isset($pocetHracu) && pocetHracu == 2) echo "checked";
?>
value=2> 2 hráči
<span class="error">* <?php echo $genderErr;?></span>