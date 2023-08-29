<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo conditions 1</title>
</head>

<body>

<!-- Créer une fonction nbr positif, nbr négatif -->
    <?php
    function monTest($a){
        if($a>=0){
            return "$a est un nombre positif !";
        } 
        else if($a<0){
            return "$a est un nombre négatif !";
        }
    };

    echo (monTest(-4));
    ?>
    
</body>
</html>