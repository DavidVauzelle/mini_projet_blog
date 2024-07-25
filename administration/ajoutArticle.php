<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet Blog"> 
    <title>Page d'Administration pour Ajouter un Article</title>
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
        <form action="insertTraitement.php" method="GET">
            <h1>Ajouter un Article</h1>
            <div>
                <label for="name">Nom Article* : </label>
                <input type="text" name="nom" required>    
            </div>
            <div>
                <label for="descriptionAccueil">Description Accueil* : </label>
                <textarea
                    id="description_accueil"
                    name="description_accueil"
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
                    placeholder="Decription de la page détails de l'article"
                    rows="5"
                    maxlength="2500" 
                    required></textarea>     
            </div>
            <div>
                <label for="imageAccueil">Image Accueil* : </label>
                <input type="text" name="image_accueil" required>    
            </div>
            <div>
                <label for="imageDetail">Image Detail* : </label>
                <input type="text" name="image_detail" required>    
            </div>
            <div>
                <label for="altImage">Alt* : </label>
                <input type="text" name="alt" required>
            </div>
            <div>
                <input type="submit" name="ajouter" value="Ajouter Article">
                <input type="reset" value="Réinitialiser">    
            </div>  
        </form>    
    </main>
</body>
</html>