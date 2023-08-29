<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 11</title>
</head>

<body>
    

    <?php
    function Moyenne($a,$b,$c){
        $calcul = ($a + $b + $c) /3;
        return $calcul;
    }
    $calcul = Moyenne(20,12,3);
    echo($calcul);
    ?>
</body>
</html>