<!DOCTYPE html>
<html lang="fi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kirjautumistyyli.css"/>
    <title>uutisjuttu</title>

</head>

<nav>

    <button id="pääsivu" class="tab"><a href="../uutisjuttu.php">Pääsivu</a></button>
    <button id="kauhusivu" class="tab"><a href="../kauhusivu.php">Kauhusivu</a></button>
    <button id="mahtavasivu" class="tab"><a href="../mahatavasivu.php">Mahatavasivu</a></button>
    <button id="meemisivu" class="tab"><a href="../meemisivu.php">Meemisivu</a></button>
    <div style="margin-left: auto">
        <button id="connect" class="tabactivekirjaudu"><a href="connect.php">kirjaudu</a></button>
        <button id="rekisteröidy" class="tabkirjaudu"><b><a href="rekisteröidy.php">rekisteröidy</a></b></button>
    </div>

</nav>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "uutisjuttu";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "yhdistetty onnistuneesti. <br>";
    echo "<img src=../kuvat/ok-nice.gif>";
    ?>
    
</body>

</html>