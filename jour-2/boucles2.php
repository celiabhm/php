<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo boucles 2</title>
</head>

<body>
    

    <?php
    function boucleTest(int $lignes, int $col){
        // D'abord le i pour la 1er ligne vertical //
    for($i=0; $i<$lignes; $i++){
        echo("<br>");
        for($j=0; $j<$col; $j++){
            // On passe au nbr de colonnes //
        echo($i);
            }
        }
    };
    boucleTest(5,20);
    ?>
</body>
</html>