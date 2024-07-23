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
    <title>Page d'Administration pour lister les articles</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php?">Page d'accueil</a></li>
                <li><a href="../administration/accueilAdmin.php">Administration du blog</a></li>
            </ul>  
        </nav>    
    </header>
    <main>
        <h1>Mes séries préférées</h1>

        <ul>
            <li>
                <a href="ajoutArticle.php">Ajouter un article</a>
            </li>
        </ul>

        <?php foreach($series as $serie) : ?>
            <article>
                <h2><?= $serie['nom']; ?></h2>
                <img src="<?= $serie['image_accueil']; ?>" alt="<?= $serie['alt']; ?>">
                <p><?= $serie['description_accueil']; ?></p>
                <ul>
                    <li>
                        <a href="modifierArticle.php?id=<?= $serie['id']; ?>">Modifier article</a>
                    </li>
                    <li>
                        <a href="deleteTraitement.php?id=<?= $serie['id']; ?>">Supprimer article</a>
                    </li>
                </ul>
            </article>
        <?php endforeach; ?>    
    </main>
</body>
</html>