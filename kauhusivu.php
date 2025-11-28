<?php
include 'kirjaudu/config.php';
?>
<!DOCTYPE html>
<html lang="fi">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link id="themeStylesheet" rel="stylesheet" href="uutistyyli.css">
        <title>jotain uutisia</title>
    </head>

    <body id="body">
        <header>
            
            <button id="pääsivu" class="tab"><a href="uutisjuttu.php">Pääsivu</a></button>
            <button id="jokusivu" class="tabactive"><a href="kauhusivu.php">kauhuasivu</a></button>
            <button id="mahtavasivu" class="tab"><a href="mahatavasivu.php">mahatavasivu</a></button>
            <button id="meemisivu" class="tab"><a href="meemisivu.php">Meemisivu</a></button>
            <button id="lisää artikkeli" class="tab"><a href="uusiartikkeli.php">lisää uusi artikkeli</a></button>
            <div id="logintabs" style="margin-left: auto">
                <button id="connect" class="tabkirjaudu"><a href="kirjaudu/kirjaudu.php">kirjaudu</a></button>
                <button id="rekisteröidy" class="tabkirjaudu"><b><a href="kirjaudu/rekisteröidy.php">rekisteröidy</a></b></button>
            </div>

        </header>

        <nav>
            <h1 id="nav-otsikko">tässä on sinulle mahtavia kauhutarinoita</h1>
            <h3 id="VAROITUS">ISO VAROITUS TEEMAN VAIHTO EI OLE TÄLLÄ SIVULLA HEIKKOHERMOISILLE</h3>

            <button id="tummatilanappi">Tumman tila päälle/pois</button>
        </nav>

        <main>

            <?php
                require "./kirjaudu/connect.php";
                $sql = "SELECT * FROM uutinen WHERE kategoria = 2 ORDER BY id DESC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="artikkeli">';
                        echo '<h2 class="uutisotsikko">';
                        echo $row['otsikko'];
                        echo "</h2>";
                        echo'<img src="kuvat/';
                        echo $row['kuva'];
                        echo '">';
                        echo "<p class='kuvateksti'>";
                        echo $row['kuvateksti'];
                        echo "</p>";
                        echo "<p class='uutisteksti'>";
                        echo $row['teksti'];
                        echo "</p>";
                        echo "</div>";
                    }
                } else {
                echo "yhteys tietokantaan on katkennut tai jotain muuta meni päin persettä <br>";
                echo "<img src='kuvat/thumbs-down.gif'>";
                }

            ?>

        </main>

        <script>var pelottava = false; </script>
        <script src="kaikkimahollinen.js"></script>

        <a href="https://www.creepypasta.com/" class="easter_egg">easter egg</a>
    </body>
</html>