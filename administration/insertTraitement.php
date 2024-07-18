<?php

require_once '../connexion.php';

$nom = $_GET['nom'];
$descriptionAccueil = $_GET['description_accueil'];
$descriptionDetail = $_GET['description_detail'];
$imageAccueil = $_GET['image_accueil'];
$imageDetail = $_GET['image_detail'];
$altImage = $_GET['alt'];

$requete = "INSERT INTO articles (nom, description_accueil, description_detail, image_accueil, image_detail, alt) 
            VALUES ('$nom', '$descriptionAccueil', '$descriptionDetail', '$imageAccueil', '$imageDetail', '$altImage')";
$bdd->exec($requete);

header('Location: accueilAdmin.php');