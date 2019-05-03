<?php

session_start();


$_SESSION["Adresselivraison"] = $_POST["Adresse1"];
$_SESSION["Ville"] = $_POST["Ville"];
$_SESSION["CodePostal"] = $_POST["CodePostal"];


header('Location: verification.php');


?>

