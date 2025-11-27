<?php
include 'kirjaudu/config.php';
?>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="uutistyyli.css" />
    <title>uusiartikkeli</title>
</head>

<nav>
    <button id="pääsivu" class="tab"><a href="uutisjuttu.php">Pääsivu</a></button>
    <button id="kauhusivu" class="tab"><a href="kauhusivu.php">Kauhusivu</a></button>
    <button id="mahtavasivu" class="tab"><a href="mahatavasivu.php">Mahatavasivu</a></button>
    <button id="meemisivu" class="tab"><a href="meemisivu.php">Meemisivu</a></button>
    <button id="lisää artikkeli" class="tabactive"><a href="uusiartikkeli.php">lisää uusi artikkeli</a></button>
    <div id="logintabs" style="margin-left: auto">
        <button id="connect" class="tabkirjaudu"><a href="kirjaudu.php">kirjaudu</a></button>
        <button id="rekisteröidy" class="tabkirjaudu"><b><a href="rekisteröidy.php">rekisteröidy</a></b></button>
    </div>
</nav>

<body id="body" class="uusiartikkeli">
    
<?php

echo "<h1>Luo uusi artikkeli</h1>"; 
echo "<form action='kirjaudu/upload.php' method='post' enctype='multipart/form-data'>
<p>otsikko</p><input type='text' name='otsikko'>
<p>teksti</p><input type='text' name='teksti'>
<p>kuva</p><input type='file' name='file'>
<p>kuvateksti</p><input type='text' name='kuvateksti'>
<p>kategoria 1-4 (1=uutinen 2=kauhutarina 3=mahatava juttu 4=meemi)</p><input type='number' id='quantity' name='kategoria' min='1' max='4'>
<input type='submit'>";
echo "</form>"; 


?>

</body>

</html>