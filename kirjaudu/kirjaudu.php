<?php
include "config.php";
date_default_timezone_set("Europe/Helsinki");
$aika = date("d.m.Y H:i");
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck < 1) {
    $_SESSION['warning'] = "käyttäjää ei löydy";
    header("location:password.php");
} else {
    if ($row = mysqli_fetch_assoc($result)) {
        $salasanamuunnos = password_verify($password, $row['password']);
        if ($salasanamuunnos == FALSE) {
            $_SESSION['warning'] = "salasana ei täsmää";
        header("location:password.php");
        } else if ($salasanamuunnos == TRUE) {
            $_SESSION['loggeduser45696'] = $username;
            echo $_SESSION['loggeduser45696'];
            echo " on kirjautunut sisään onnistuneesti"
            echo "<img src=../kuvat/thumbs-thumbs-up-kid-gif>";
        }
    }
}
?>