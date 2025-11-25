<!DOCTYPE html>
<html lang="fi">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link id="themeStylesheet" rel="stylesheet" href="uutistyyli.css">
        <title>mahtavaia uutisia</title>
    </head>

    <body id="body">
        <header>
            <button id="pääsivu" class="tab"><a href="uutisjuttu.php">Pääsivu</a></button>
            <button id="kauhusivu" class="tab"><a href="kauhusivu.php">Kauhusivu</a></button>
            <button id="mahtavasivu" class="tab"><a href="mahatavasivu.php">Mahatavasivu</a></button>
            <button id="meemisivu" class="tabactive"><a href="meemisivu.php">Meemisivu</a></button>
            <div id="logintabs" style="margin-left: auto">
                <button id="connect" class="tabkirjaudu"><a href="kirjaudu/connect.php">kirjaudu</a></button>
                <button id="rekisteröidy" class="tabkirjaudu"><b><a href="kirjaudu/rekisteröidy.php">rekisteröidy</a></b></button>
            </div>
        </header>

        <nav>
            <h1>tässä on sinulle mahtavia meemejä</h1>

            <button id="tummatilanappi">Tumman tila päälle/pois</button>
        </nav>

        <main>
            <div class="artikkeli">

            <h1>Dissaster girl</h1>
            <img src="https://ichef.bbci.co.uk/news/1024/cpsprodpb/F1F2/production/_118283916_b19c5a1f-162b-410b-8169-f58f0d153752.jpg.webp" width="750" height="300">
            </div>

            <div class="artikkeli">
                
                <h1>Success kid</h1>
                <img src="https://scx1.b-cdn.net/csz/news/800a/2025/ai-churns-out-funnier.jpg" width="750" height="250">
            
            </div>
        </main>

        <script>var meemi = false; </script>
        <script src="kaikkimahollinen.js"></script>

        
    </body>
</html>