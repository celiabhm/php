<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo Tableau 1</title>
</head>


<body>
    

    <?php
    // - Générez un tableau de longueur 50 en injectant des valeurs aléatoires comprises entre -100 et 100//
    $tab = [];
    
        for($i=0;$i<50;$i++){
            $tab[$i] = rand(-100,100);
            //$tab[] = rand(-100,100); //
        }    
    
    // Afficher la taille du tableau //
    var_dump($tab);
    echo count($tab);
    echo "<br>";
    // Créer une fonction qui affiche la valeur la plus grande //
    function afficherVal($tab){
        $valueM= $tab[0];
        // Parcours ttes les cases //
        foreach($tab as $value){
            if($value>$valueM){
                $valueM = $value;
            }
        }
        return $valueM;
    }
    echo afficherVal($tab);
    echo "<br>";

    // Autre façon de le faire //
    
    function afficherMax($tab){
        echo max($tab);
    }
    afficherMax($tab);

    // Fonction qui affiche la moyenne du tableau (avec fonction php)//
    function moyenneTab(array $tab){
        return array_sum($tab) / count($tab);
    }
    echo moyenneTab($tab);
    echo "<br>";
    // Fonction qui affiche la plus petite valeur //
    function afficherMin($tab){
        $valueM= $tab[0];
        // Parcours ttes les cases //
        foreach($tab as $value){
            if($value<$valueM){
                $valueM = $value;
            }
        }
        return $valueM;
    }
    echo afficherMin($tab);
    echo "<br>";
    ?>
</body>
</html>