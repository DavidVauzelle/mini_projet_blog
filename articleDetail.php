<?php

require_once 'connexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Requête SQL pour récupérer les éléments d'un article de la bdd
    $requete="SELECT id, nom, description_detail, image_detail, alt FROM articles where id = $id";
    $series=$bdd->query($requete);

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet Blog"> 
    <title>Page d'une série</title>
</head>
<body>

    <?php foreach($series as $serie) : ?>
    <article>
        <a href="index.php?">Page d'accueil</a>
        <h1><?= $serie['nom']; ?></h1>
        <img src="<?= $serie['image_detail']; ?>" alt="<?= $serie['alt']; ?>">
        <p><?= $serie['description_detail']; ?></p> 
    </article>
    <?php endforeach; ?>

</body>
</html>