<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    $id=['id_article'];

    if(isset($_POST['nom_article']) && isset($_POST['contenu_article']) && isset($_post['id_article'])){
        $nom_article = $_POST['nom_article'];
        $contenu_article= $_POST['contenu_article'];
        $id_article= $_POST['id_article'];
    
    }
    // Connexion à la base de données //
        $db = new PDO('mysql: host = localhost;dbname=articles','root','',
        array( PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION));
        $db ->setAttribute(PDO:: ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);
    // Récuperer tout les articles //
    $sql= "SELECT * FROM article";
    // Requête préparée //
    //Préparation de la requête SQL nous stockons dans une variable $req la requête à exécuter
    $req = $db->prepare($sql);
    //Une fois tous les paramètres bindés, on peut exécuter la requete
    $req->execute();    

        foreach($req as $value){
            echo('<p>numéro de  l’article : '.$value["id_article"].'</p>
            <br>
            <p>nom de l’article : '.$value ["nom_article"].'</p>
            <br>
            <p>contenu de l’article : '.$value["contenu_article"].'</p>
            <br>');
        }
    
    ?>
</body>
</html>