<?php

require_once '../connexion.php';

// Requête SQL pour lister les articles enregistrer dans la bdd
// $requete="SELECT * FROM articles;";
$requete="SELECT id, nom, description_accueil, image_accueil, alt FROM articles";
$series=$bdd->query($requete);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet Blog"> 
    <title>Page Admin pour lister les articles</title>
</head>
<body>
    <h1>Mes séries préférées</h1>
    <a href="ajoutArticle.php">Ajouter un article</a>

    <?php foreach($series as $serie) : ?>
        <article>
            <h2><?= $serie['nom']; ?></h2>
            <img src="<?= $serie['image_accueil']; ?>" alt="<?= $serie['alt']; ?>">
            <p><?= $serie['description_accueil']; ?></p>
            <a href="modifierArticle.php">Modifier article</a>
            <a href="deleteTraitement.php?id=<?= $serie['id']; ?>">Supprimer article</a>
        </article>
    <?php endforeach; ?>

</body>
</html>