<?php
include "config.php";
date_default_timezone_set("Europe/Helsinki");
$aika = date("d.m.Y H:i");
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$password2 = mysqli_real_escape_string($conn, $_POST['password2']);

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_fetch_assoc($result)) {
    $_SESSION['warning'] = "sähköposti on jo käytössä";
    header("location:rekisteröidy.php")
} else {


if ($password != $password2) {
    $_SESSION['warning'] = "salasant eivät täsmää";
    $_SESSION['email'] = $username;
    header("location:rekisteröidy.php");
} else {
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO users (username, password, lastlogin) VALUES ('$username', '$password', '$aika')";
    mysqli_query($conn, $sql);
    $_SESSION['loggeduser45696'] = $username;
    $_SESSION['success'] = "käyttäjä $username lisätty palveluun"
    header("location: ")
}
}

?>