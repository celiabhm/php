<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10</title>
</head>

<body>
    

    <?php
    function Somme(int $a, int $b,int $c): int{
        $calcul = $a + $b +$c;
        return $calcul;
    };
    $calcul = Somme(10,5,2);
    echo($calcul);
    ?>
</body>
</html>