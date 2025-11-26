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
    header("location: rekisteröidy.php");
    exit();
}

if ($password !== $password2) {
    $_SESSION['warning'] = "salasanat eivät täsmää";
    header("location: rekisteröidy.php");
    exit();
}

$hash_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password, lastlogin) VALUES ('$username', '$hash_password', '$aika')";
mysqli_query($conn, $sql);

$_SESSION['success'] = "käyttäjä $username lisätty palveluun";
$_SESSION['loggeduser45696'] = $username;

header("location: password.php");
exit();
?>
