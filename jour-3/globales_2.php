<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <form class="formulaire_co" method="POST" >
        <h1>Test </h1>
        <label for="fname">Prix HT : </label><br>
        <input type="number" id="priceHT" name="priceHT"><br><br>
        <label for="lname">Nombre d'articles :</label><br>
        <input type="number" id="article" name="article"><br><br>
        <label for="taux"> TVA en %:</label>
        <input type="number" id="tva" name="tva" placehorder='5'>
        <input type="submit" value="calculer">
    </form>

    

<!-- - Afficher dans cette même page le prix TTC (prix HT*taux TVA*quantité) avec un affichage du style :
Le prix TTC est égal à : valeur €. -->  

    <?php
    if(isset($_POST['priceHT']) && isset($_POST['article']) && ($_POST['tva'])){
        $priceHT = $_POST['priceHT'];
        $article= $_POST['article'];
        $tva= $_POST['tva'];
        $total= ($priceHT* $article) *(1+($tva/100));
        echo "Le prix TTC est égal à $total";
    }
    ?>
</body>
</html>