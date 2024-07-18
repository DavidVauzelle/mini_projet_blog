<?php

require_once '../connexion.php';

$id = $_GET['id'];

$requete = "DELETE from articles WHERE id = $id";

$bdd->exec($requete);

header('Location: accueilAdmin.php');