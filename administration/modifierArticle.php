<?php
require_once '../connexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Requête SQL pour sélectionner les données souhaitées de la table articles
    $sql = "SELECT * FROM articles WHERE id = :id";

    // Préparer la requête
    $series = $bdd->prepare($sql);
    $series -> bindValue(':id', $id, PDO::PARAM_INT);

    // Exécuter la requête
    $series -> execute();

    // Récupérer les résultats
    $article = $series->fetch(PDO::FETCH_ASSOC);

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet Blog"> 
    <title>Page d'Administration pour Modifier un Article</title>
</head>
<body>

    <form action="updateTraitement.php" method="GET">
        <h1>Modification de l'article</h1>
        <div>
            <label for="name">Nom Article* : </label>
            <input type="text" name="nom" value="<?= htmlspecialchars($article['nom']); ?>" required>    
        </div>
        <div>
            <label for="descriptionAccueil">Description Accueil* : </label>
            <textarea
                id="description_accueil"
                name="description_accueil"
                placeholder="Decription de la page d'Accueil de l'article"
                rows="5"
                maxlength="2500" 
                required><?= htmlspecialchars($article["description_accueil"]); ?>"</textarea> 
        </div>
        <div>
            <label for="descriptionDetail">Description Detail* : </label>
            <textarea
                id="description_detail"
                name="description_detail"
                placeholder="Decription de la page détaillée de l'article"
                rows="5"
                maxlength="2500" 
                required><?= htmlspecialchars($article["description_detail"]); ?>"</textarea>     
        </div>
        <div>
            <label for="imageAccueil">Image Accueil* : </label>
            <input type="text" name="image_accueil" value="<?= htmlspecialchars($article["image_accueil"]); ?>" required>    
        </div>
        <div>
            <label for="imageDetail">Image Detail* : </label>
            <input type="text" name="image_detail" value="<?= htmlspecialchars($article["image_detail"]); ?>" required>    
        </div>
        <div>
            <label for="altImage">Alt* : </label>
            <input type="text" name="alt" value="<?= htmlspecialchars($article["alt"]); ?>" required>
        </div>
        <div>
            <input type="hidden" name="id" value="<?= $id; ?>">
        </div>
        <div>
            <input type="submit" name="ajouter" value="Modifier Article">
            <input type="reset" value="Réinitialiser">    
        </div>
    </form> 

</body>
</html>