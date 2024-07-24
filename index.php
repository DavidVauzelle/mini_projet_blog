<?php

require_once 'connexion.php';

// Requête SQL pour sélectionner les données souhaitées de la table articles
$sql = "SELECT id, nom, description_accueil, image_accueil, alt FROM articles";

// Préparer la requête
$articles = $bdd->prepare($sql);

// Exécuter la requête
$articles->execute();

// Récupérer les résultats
$series = $articles->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet Blog"> 
    <title>Blog de mes séries préférées</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="administration/accueilAdmin.php">Administration du blog</a></li>
            </ul>  
        </nav>    
    </header>
    <main>
        <h1>Mes séries préférées</h1>

        <?php foreach($series as $serie) : ?>
            <article>
                <h2><?= htmlspecialchars($serie['nom']); ?></h2>
                <img src="<?= htmlspecialchars($serie['image_accueil']); ?>" alt="<?= htmlspecialchars($serie['alt']); ?>">
                <p><?= htmlspecialchars($serie['description_accueil']); ?></p>
                <a href="articleDetail.php?id=<?= htmlspecialchars($serie['id']); ?>">En savoir plus</a> 
            </article>
        <?php endforeach; ?>    
    </main>

</body>
</html>