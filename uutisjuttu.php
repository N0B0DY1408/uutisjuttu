<!DOCTYPE html>
<html lang="fi">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="uutistyyli.css" />
        <title>mahtavaia uutisia</title>
    </head>

    <body id="body">
        <header>
            <button id="pääsivu" class="tabactive"><a href="uutisjuttu.php">Pääsivu</a></button>
            <button id="kauhusivu" class="tab"><a href="kauhusivu.php">Kauhusivu</a></button>
            <button id="mahtavasivu" class="tab"><a href="mahatavasivu.php">Mahatavasivu</a></button>
            <button id="meemisivu" class="tab"><a href="meemisivu.php">Meemisivu</a></button>
            <div id="logintabs" style="margin-left: auto">
                <button id="connect" class="tabkirjaudu"><a href="kirjaudu/connect.php">kirjaudu</a></button>
                <button id="rekisteröidy" class="tabkirjaudu"><b><a href="kirjaudu/rekisteröidy.php">rekisteröidy</a></b></button>
            </div>
            
        </header>

        <nav>
            <h1>tässä on sinulle mahtavia uutisia(ei siis mahtavia vaan hienoja suurin osa luultavasti aika surkeita)</h1>

            <button id="tummatilanappi">Tumman tila päälle/pois</button>
        </nav>


        <main>
            
        <?php
            require "./kirjaudu/connect.php";
            $sql = "SELECT * FROM uutinen WHERE kategoria = 1 ORDER BY id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="artikkeli">';
                    echo '<h2 class="uutisotsikko">';
                    echo $row['otsikko'];
                    echo "</h2>";
                    echo'<img src="';
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

        <script src="kaikkimahollinen.js"></script>

        <a href="easter_egg.php" class="easter_egg">easter_egg</a>
    </body>
</html>