<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation php Index</title>
</head>


<body>

<form class="formulaire_article" method="POST" action="./addArticle.php">
        <h1>Formulaire</h1>
        <label for="article1"> Nom de l'article : </label><br>
        <input type="text" id="nom" name="nom_article"><br><br>
        <label for="article2"> Prix de l'article :</label><br>
        <input type="text" id="prix" name="prix_article"><br><br>
        <input type="submit" name="submit" value="Ajouter">
    </form>
</body>
</html>