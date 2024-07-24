<?php
require_once '../connexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Requête pour récupérer tous les champs d'un article depuis la bdd
    $requete = "SELECT * FROM articles WHERE id = $id";
    $series = $bdd->query($requete);
    $article = $series->fetch(PDO::FETCH_ASSOC);

    // Requête SQL pour sélectionner les données souhaitées de la table articles
    // $sql = "SELECT * FROM articles WHERE id = $id";

    // // Préparer la requête
    // $series = $bdd->prepare($sql);

    // // Exécuter la requête
    // $series->execute();

    // // Récupérer les résultats
    // $article = $series->fetchAll(PDO::FETCH_ASSOC);

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
            <input type="text" name="nom" value="<?= htmlspecialchars($serie['nom']); ?>" required>    
        </div>
        <div>
            <label for="descriptionAccueil">Description Accueil* : </label>
            <textarea
                id="description_accueil"
                name="description_accueil"
                placeholder="Decription de la page d'Accueil de l'article"
                rows="5"
                maxlength="2500" 
                required><?= $serie["description_accueil"]; ?>"</textarea> 
        </div>
        <div>
            <label for="descriptionDetail">Description Detail* : </label>
            <textarea
                id="description_detail"
                name="description_detail"
                placeholder="Decription de la page détaillée de l'article"
                rows="5"
                maxlength="2500" 
                required><?= $serie["description_detail"]; ?>"</textarea>     
        </div>
        <div>
            <label for="imageAccueil">Image Accueil* : </label>
            <input type="text" name="image_accueil" value="<?= $serie["image_accueil"]; ?>" required>    
        </div>
        <div>
            <label for="imageDetail">Image Detail* : </label>
            <input type="text" name="image_detail" value="<?= $serie["image_detail"]; ?>" required>    
        </div>
        <div>
            <label for="altImage">Alt* : </label>
            <input type="text" name="alt" value="<?= $serie["alt"]; ?>" required>
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