<?php

require_once '../connexion.php';

// Requête SQL pour sélectionner les colonnes souhaitées de la table articles
$sql = "SELECT id, nom, description_accueil, image_accueil, alt FROM articles";

// Préparer la requête
$series = $bdd->prepare($sql);

// Exécuter la requête
$series->execute();

// Récupérer les résultats
$articles = $series->fetchAll(PDO::FETCH_ASSOC);

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

        <?php foreach($articles as $article) : ?>
            <article>
                <h2><?= htmlspecialchars($article['nom']); ?></h2>
                <img src="<?= htmlspecialchars($article['image_accueil']); ?>" alt="<?= htmlspecialchars($article['alt']); ?>">
                <p><?= htmlspecialchars($article['description_accueil']); ?></p>
                <ul>
                    <li>
                        <a href="modifierArticle.php?id=<?= htmlspecialchars($article['id']); ?>">Modifier article</a>
                    </li>
                    <li>
                        <a href="deleteTraitement.php?id=<?= htmlspecialchars($article['id']); ?>">Supprimer article</a>
                    </li>
                </ul>
            </article>
        <?php endforeach; ?>
    </main>
</body>
</html>