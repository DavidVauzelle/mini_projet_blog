<?php

require_once '../connexion.php';

$id = $_GET['id'];

// Requête préparée
$sql = "DELETE FROM articles WHERE id = :id";

$requete = $bdd->prepare($sql);
$requete -> bindParam(':id', $id, PDO::PARAM_INT);
$requete -> execute();

header('Location: accueilAdmin.php');