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
        <label for="fname"> Nom : </label><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname"> Contenu :</label><br>
        <input type="text" id="lname" name="lname"><br><br>
        <input type="submit" value="Ajouter">
    </form>


    <?php
    $name=['nom_article'];
    $content=['contenu_article'];
    if(isset($_POST['nom_article']) && isset($_POST['contenu_article'])){
        $nom_article = $_POST['nom_article'];
        $contenu_article= $_POST['contenu_article'];
        // Connexion à la base de données //
    $db = new PDO('mysql: host = localhost;dbname=articles','root','',
    array( PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION));
    $db ->setAttribute(PDO:: ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);

    // requête pr insérer des données //
    $sql="INSERT INTO article(nom_article, contenu_article) VALUES(:nom_article, :contenu_article)";

    // Requête préparée //
    //Préparation de la requête SQL nous stockons dans une variable $req la requête à exécuter
        $req = $db->prepare($sql);
    // On va "binder" le paramètre correspondant au "non_utilisateur" de type String 
        $req->bindParam('nom_article', $nom_article, PDO::PARAM_STR);
        $req->bindParam('contenu_article', $contenu_article, PDO::PARAM_STR);
    //Une fois tous les paramètres bindés, on peut exécuter la requete
        $req->execute();
    }
    


    ?>
</body>
</html>