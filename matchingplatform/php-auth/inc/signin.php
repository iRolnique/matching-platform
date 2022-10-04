<?php
session_start();
require_once 'connect.php';
$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * 
          FROM user 
          WHERE email = '$email' AND passwort = '$password'
          LIMIT 1";
$userData = mysqli_query($connect, $query);
    if( mysqli_num_rows($userData) == 1){
        $row = mysqli_fetch_array($userData);
        $_SESSION["id"] = $row["id"];
        $_SESSION["angemeldet"] = true;
        header("Location: ../nav/profil.php");
    } else {
        echo "Fehler";
        header("Location: ../../index.php");
    }
