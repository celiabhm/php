<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Article/ Index </title>
</head>


<body>
    

    <?php
    // Connexion à la base de données //
    $db = new PDO('mysql: host = localhost;dbname=evaluation','root','',
    array( PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION));
    $db ->setAttribute(PDO:: ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);
    // Vérifier si les deux input sont remplis //
    $nom=['nom_article'];
    $prix=['prix_article'];

 // Créer une fonction addArticle qui va effectuer une requête sql (préparé) pour ajouter en BDD un
    // nouvel article.
    function addArticle($db){
        $req = $db->prepare("INSERT INTO article (nom_article,prix_article) VALUES (:nom_article, :prix_article)");
        $req->bindParam('nom_article',$_POST['nom_article'], PDO::PARAM_STR);
        $req->bindParam('prix_article',$_POST['prix_article'],PDO::PARAM_STR);
        $req->execute();
    };

    if(isset($_POST['nom_article']) && isset($_POST['prix_article'])){
        $nom_article = $_POST['nom_article'];
        $prix_article= $_POST['prix_article'];
        addArticle($db);
    };
    
    // Afficher un message dans index.php article ajoutée //
    header("Location:."); 
    if(isset($_POST['nom_article']) && isset($_POST['prix_article'])){
        $nom_article = $_POST['nom_article'];
        $prix_article= $_POST['prix_article'];
        echo('Article ajouté');
    };
    header("Location: ./index.php"); 
    
    // Afficher un message dans index.php ajout échoué //
    
    
    ?>
</body>
</html>