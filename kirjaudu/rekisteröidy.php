<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kirjautumistyyli.css"/>
    <title>uutisjuttu</title>

</head>

<nav>
<button id="connect" class="tab"><a href="connect.php">kirjaudu</a></button>
<button id="rekisteröidy" class="tabactive"><b><a href="rekisteröidy.php">rekisteröidy</a></b></button>
</nav>

<body>

<h1>rekisteröidy</h1>

<form action="signup.php" method="post">
    <table>
    <tr>
    <td><label>sähköposti</label><input type="email" name="username" required value="
    <?php if($isset($_SESSION['email']))
     { echo $_SESSION['email'];
    }
    ?>
    "></td>
    </tr>
    <tr>
    <td><label>salasana</label><input type="password" name="password" title="täytyy sisältää ainakin yksi numero yksi iso kirjain ja ainakin kahdeksan merkkiä" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required></td>
    </tr>
    <tr>
    <td><label>salasana uudelleen</label><input type="password" name="password2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required></td>
    </tr>
    <tr>
        <td><input type="submit" value="rekisteröidy"><td>
    </tr>
</form>
<?php
if(isset($_SESSION['warning'])) {
    echo '<style>';
    echo '.varoitus { color:red; }';
    echo '</style>';
    echo "<div class='varoitus'>" . $_SESSION['warning'] . "</div>";
    unset($_SESSION['warning']);

}

</body>

</html>