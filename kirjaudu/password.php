<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kirjautumistyyli.css" />
    <title>uutisjuttu</title>
</head>

<body>
    <h1>kirjaudu</h1>
    <b><a href="password.php">kirjaudu</a></b>
    <a href="rekisteröidy.php">rekisteröidy</a>

    <form action="signup.php" method="post">
    <br>
        <table>
            <tr>
                <td><label>sähköposti</label><input type="email" name="username" required value="
                    <?php if($isset($_SESSION['success']))
                    { echo $_SESSION['loggeduser45696'];
                    }
                    ?>"
                ></td>
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
        </table>    
    </form>

    <?php
    if(isset($_SESSION['success'])) {
    echo '<style>';
    echo '.success { color:green; }';
    echo '</style>';
    echo "<div class='success'>" . $_SESSION['success'] . "</div>";
    unset($_SESSION['success']);

}

</body>
</html>
