<?php

require_once '../connexion.php';

$id = $_GET['id'];
$nom = $_GET['nom'];
$descriptionAccueil = $_GET['description_accueil'];
$descriptionDetail = $_GET['description_detail'];
$imageAccueil = $_GET['image_accueil'];
$imageDetail = $_GET['image_detail'];
$altImage = $_GET['alt'];

// Requête Préparée
$sql = "UPDATE articles SET nom=:nom, description_accueil=:descriptionAccueil, description_detail=:descriptionDetail, image_accueil=:imageAccueil, image_detail=:imageDetail, alt=:altImage WHERE id=$id";

$requete = $bdd->prepare($sql);

$requete->bindValue(':nom', $nom, PDO::PARAM_STR);
$requete->bindValue(':descriptionAccueil', $descriptionAccueil, PDO::PARAM_STR);
$requete->bindValue(':descriptionDetail', $descriptionDetail, PDO::PARAM_STR);
$requete->bindValue(':imageAccueil', $imageAccueil, PDO::PARAM_STR);
$requete->bindValue(':imageDetail', $imageDetail, PDO::PARAM_STR);
$requete->bindValue(':altImage', $altImage, PDO::PARAM_STR);

$requete->execute();

header('Location: accueilAdmin.php');