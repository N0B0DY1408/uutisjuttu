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
                <button id="pääsivu" class="tab"><a href="uutisjuttu.php">Pääsivu</a></button>
                <button id="kauhusivu" class="tab"><a href="kauhusivu.php">Kauhusivu</a></button>
                <button id="mahtavasivu" class="tabactive"><a href="mahatavasivu.php">Mahatavasivu</a></button>
                <button id="meemisivu" class="tab"><a href="meemisivu.php">Meemisivu</a></button>
                
            </header>

            <nav>
                <h1>tässä on sinulle mahatavia kuvia</h1>

                <button id="tummatilanappi">Tumman tila päälle/pois</button>
            </nav>

            <main>
                <div class="artikkeli">
                
                    <h1>ei maha mitään</h1>
                    <img src="https://images-bonnier.imgix.net/files/ill/production/2022/08/08104520/hvorfor-faar-maend-en-dunk-med-alderen-topbillede.jpg?auto=format,compress&crop=focalpoint&fp-x=0.5&fp-y=0.5&ar=1.4435695538057742:1&w=512&q=80&fit=crop">
                
                </div>  

                <div class="artikkeli">

                    <h1>kuhan koodaan</h1>
                    <img src="kuvat/kuha koodaa.jpg" width="750" height="300">

                </div>

            </main>

            <script src="kaikkimahollinen.js"></script>

            
        </body>
    </html>