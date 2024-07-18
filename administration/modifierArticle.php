<?php
require_once '../connexion.php';

$id = $_GET['id'];

$requete = "SELECT * FROM articles WHERE id = $id";
$series = $bdd->query($requete);
$resultat = $series->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet Blog"> 
    <title>Page Admin de modification d'un Article</title>
</head>
<body>

    <form action="updateTraitement.php" method="get">
        <h1>Modification de l'article</h1>
        <div>
            <label for="name">Nom Article* : </label>
            <input type="text" name="nom" value="<?= $resultat["nom"];?>" required>    
        </div>
        <div>
            <label for="descriptionAccueil">Description Accueil* : </label>
            <textarea
                id="description_accueil"
                name="description_accueil"
                value="<?= $resultat["description_accueil"];?>"
                placeholder="Decription de la page d'Accueil de l'article"
                rows="5"
                maxlength="2500" 
                required></textarea> 
        </div>
        <div>
            <label for="descriptionDetail">Description Detail* : </label>
            <textarea
                id="description_detail"
                name="description_detail"
                value="<?= $resultat["description_detail"];?>"
                placeholder="Decription de la page détaillée de l'article"
                rows="5"
                maxlength="2500" 
                required></textarea>     
        </div>
        <div>
            <label for="imageAccueil">Image Accueil* : </label>
            <input type="text" name="image_accueil" value="<?= $resultat["image_accueil"];?>" required>    
        </div>
        <div>
            <label for="imageDetail">Image Detail* : </label>
            <input type="text" name="image_detail" value="<?= $resultat["image_detail"];?>" required>    
        </div>
        <div>
            <label for="altImage">Alt* : </label>
            <input type="text" name="alt" value="<?= $resultat["alt"];?>" required>
        </div>
        <div>
            <input type="hidden" name="id" value="<?= $id;?>">
        </div>
        <div>
            <input type="submit" name="ajouter" value="Modifier Article">
            <input type="reset" value="Réinitialiser">    
        </div>  
    </form> 

</body>
</html>