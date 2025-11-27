<?php
include "config.php";

$otsikko      = $_POST['otsikko'];
$teksti       = $_POST['teksti'];

$permitted_chars = '0123456789abcdefghijklmnopqrsuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ   ';
$random = substr(str_shuffle($permitted_chars), 0, 10);

echo "" . var_dump($_POST);
$otsikko = $_POST['otsikko'];
$teksti = $_POST['teksti'];
$kategoria = $_POST['kategoria'];
$kuvateksti = $_POST['kuvateksti'];
$username = $_SESSION['username']; // tai mistä sen haet
$fileTmpName = $_FILES['file']['tmp_name'];
$fileActualExt = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
$fileError = $_FILES['file']['error'];
$fileSize = $_FILES['file']['size'];

$allowed = array('jpg','jpeg','png','gif');

if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
        if ($fileSize < 500000000) {
            
            $fileNameNew = $random . "." . $fileActualExt;
            $fileDestination = '../kuvat/' . $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);

            echo "kuvan siirto onnistui";

            // TÄRKEÄ KORJAUS TÄHÄN ↓
            $sql = "INSERT INTO uutinen (otsikko, teksti, kuva, kategoria, kuvateksti, toimittaja) 
                    VALUES ('$otsikko', '$teksti', '$fileNameNew', '$kategoria', '$kuvateksti', '$username')";

            mysqli_query($conn, $sql);

            header("location: ../uutisjuttu.php");
        } else {
            echo "kuva on liian suuri";
        }
    }
}

?>