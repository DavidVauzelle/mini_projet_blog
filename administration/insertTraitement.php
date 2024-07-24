<?php

require_once '../connexion.php';

$nom = $_GET['nom'];
$descriptionAccueil = $_GET['description_accueil'];
$descriptionDetail = $_GET['description_detail'];
$imageAccueil = $_GET['image_accueil'];
$imageDetail = $_GET['image_detail'];
$altImage = $_GET['alt'];

// Requête préparée
$sql = 'INSERT INTO articles(nom, description_accueil, description_detail, image_accueil, image_detail, alt) VALUES(:nom, :description_accueil, :description_detail, :image_accueil, :image_detail, :alt)';

$requete = $bdd->prepare($sql);

$requete->bindValue(':nom', $nom, PDO::PARAM_STR);
$requete->bindValue(':description_accueil', $descriptionAccueil, PDO::PARAM_STR);
$requete->bindValue(':description_detail', $descriptionDetail, PDO::PARAM_STR);
$requete->bindValue(':image_accueil', $imageAccueil, PDO::PARAM_STR);
$requete->bindValue(':image_detail', $imageDetail, PDO::PARAM_STR);
$requete->bindValue(':alt', $altImage, PDO::PARAM_STR);

$requete->execute();

header('Location: accueilAdmin.php');