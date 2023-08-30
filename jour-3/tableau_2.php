<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice tableau 2</title>
</head>


<body>
<!-- - Affichez les nombres premiers ainsi obtenus dans une liste HTML (<ul><li>).  --> 

    <?php
    $number = range(0,1000);
    $multiple=[];
    // Permet de trouver tout les nombres qui sont des multiples //
    function exoBonus(int $number):bool{
            if($number<2){
                return false;
            }
            for ($i = 2; $i <$number; $i++) {
                if ($number % $i === 0) {
                    return false;
                }
            } 
            return true;
        }

    // Permet de parcourir chaque case et d'ajouter au tableau les multiples //
        foreach($number as $value){
            if(exoBonus ($value) == true){
                array_push($multiple,$value);
        }
    }
    var_dump($multiple);

    echo "<ul>";
            foreach ($multiple as $multiple) {
                echo "<li>$multiple</li>";
            }
            echo "</ul>";

    // Permet d'afficher les multiples dans le html via une liste //
    ?>
</body>
</html>