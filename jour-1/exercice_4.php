<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>

<body>
    

    <?php
    $articlePrice = 2.40;
    $articleNombre = 12;
    $tauxTva = 1.20;
    // On peut la mettre dans une const car on modifie pas //
    const TAUX_TVA = 1.2;

    /*Version sans const
    function priceTotal($a, $b, $c){
        $calcul = ($articlePrice * $articleNombre) + ($articlePrice * $articleNombre * $tauxTva/100);
        return $calcul;
    };
    */
    
    // Version avec const //
    function priceTotal($articlePrice, $articleNombre){
        $calcul = ($articlePrice * $articleNombre) + ($articlePrice * $articleNombre * TAUX_TVA/100);
        return $calcul;
    };

    $resultat = priceTotal($articlePrice,$articleNombre,$tauxTva);    
    echo($articlePrice);
    echo "&nbsp";
    // Afficher le prix HT //
    echo($articleNombre);
    echo "&nbsp";
    // Afficher le nombre d'article //
    echo($tauxTva);
    echo "&nbsp";
    // Afficher le taux de tva //
    echo($resultat);
    // Afficher le resultat //
    ?>
</body>
</html>