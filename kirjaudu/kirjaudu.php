<?php
include "config.php";

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) < 1) {
    $_SESSION['warning'] = "käyttäjää ei löydy";
    header("location: password.php");
    exit();
}

$row = mysqli_fetch_assoc($result);

if (!password_verify($password, $row['password'])) {
    $_SESSION['warning'] = "salasana ei täsmää";
    header("location: password.php");
    exit();
}

$_SESSION['loggeduser45696'] = $username;
header("location: ../uutisjuttu.php");
exit();

?>