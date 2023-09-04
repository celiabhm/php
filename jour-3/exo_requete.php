<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Requête/sql</title>
</head>

<body>
    <form class="formulaire_co" method="POST">
        <h1>Formulaire</h1>
        <label for="fname">Nombre 1 : </label><br>
        <input type="text" id="nom_article" name="nom_article"><br><br>
        <label for="lname">Nombre 2 :</label><br>
        <input type="text" id="contenu_article" name="contenu_article"><br><br>
        <input type="submit" value="Ajouter">
    </form>


    <?php
    $name=['nom_article'];
    $content=['contenu_article'];
    if(isset($_POST['nom_article']) && isset($_POST['contenu_article'])){
        $nom_article = $_POST['nom_article'];
        $contenu_article= $_POST['contenu_article'];
    }
    // Connexion à la base de données //
    $db = new PDO('mysql: host = localhost;dbname=articles','root','',
    array( PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION));
    $db ->setAttribute(PDO:: ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);

    // requête pr insérer des données //
    $sql="INSERT INTO articles(nom_article, contenu_article) VALUES('Stylo','quatres couleurs')";
    ?>
</body>
</html>