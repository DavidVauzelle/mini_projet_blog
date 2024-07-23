<?php

require_once '../connexion.php';

$id = $_GET['id'];
$nom = $_GET['nom'];
$descriptionAccueil = $_GET['description_accueil'];
$descriptionDetail = $_GET['description_detail'];
$imageAccueil = $_GET['image_accueil'];
$imageDetail = $_GET['image_detail'];
$altImage = $_GET['alt'];

$requete = "UPDATE articles SET nom='$nom', description_accueil='$descriptionAccueil', description_detail='$descriptionDetail', image_accueil='$imageAccueil', image_detail='$imageDetail', alt='$altImage' WHERE id=$id";
$bdd->exec($requete);

header('Location: accueilAdmin.php');