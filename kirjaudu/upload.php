<?php
include "config.php";

$otsikko      = $_POST['otsikko'];
$teksti       = $_POST['teksti'];

$permitted_chars = '0123456789abcdefghijklmnopqrsuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ   ';
$random = substr(str_shuffle($permitted_chars), 0, 10);

echo "" . var_dump($_POST);
$file =         $_FILES['file']['name'];
$fileTmName =   $_FILES['file']['tmp_name'];
$fileSize =     $_FILES['file']['size'];
$fileError =    $_FILES['file']['error'];
$fileType =     $_FILES['file']['type'];

$fileExt = explode('.', $file);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'png', 'jpeg');

if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
        if ($fileSize < 500000000) {
            $fileNameNew = $random.".".$fileActualExt;
            $fileDestination = '../kuvat/'.$fileNameNew;
            move_uploaded_file($fileTmName, $fileDestination);
            echo "kuvan siirto onnistui";
            $sql = "INSERT INTO uutinen (otsikko, teksti, kuva, kategoria, toimittaja) VALUES ('$otsikko', '$teksti', '$fileNameNew', 3, 1)";
            mysqli_query($conn, $sql);
            header("location: ../uutisjuttu.php");    
        } else {
            echo "kuva on liian suuri";
        }
        
    }
}
?>