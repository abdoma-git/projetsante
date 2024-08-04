<?php 
    session_start();

    unset($_SESSION["nom"]);
    unset($_SESSION["prenom"]);
    unset($_SESSION["adresse"]);
    unset($_SESSION["email"]);
    $_SESSION["connecte"] = 0;

    header('Location: login.php');
?>
