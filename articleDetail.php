<?php

require_once 'connexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Requête SQL pour sélectionner les données souhaitées de la table articles
    $sql = "SELECT id, nom, description_detail, image_detail, alt FROM articles where id = $id";

    // Préparer la requête
    $articles = $bdd->prepare($sql);

    // Exécuter la requête
    $articles->execute();

    // Récupérer les résultats
    $series = $articles->fetchAll(PDO::FETCH_ASSOC);

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
    <header>
        <nav>
            <ul>
                <li><a href="index.php?">Page d'accueil</a></li>
                <li><a href="administration/accueilAdmin.php">Administration du blog</a></li>
            </ul>  
        </nav>    
    </header>
    <main>
        <?php foreach($series as $serie) : ?>
        <article>
            <h1><?= htmlspecialchars($serie['nom']); ?></h1>
            <img src="<?= htmlspecialchars($serie['image_detail']); ?>" alt="<?= htmlspecialchars($serie['alt']); ?>">
            <p><?= htmlspecialchars($serie['description_detail']); ?></p> 
        </article>
        <?php endforeach; ?>    
    </main>
    

</body>
</html>