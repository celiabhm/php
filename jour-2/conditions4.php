<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo conditions 4</title>
</head>

<body>
    

    <?php
    function calculPriceFinal(float $prix){
        if($prix>2000){
            echo ("La ristourne sera de 20%");
        }
        else if($prix>1000){
            echo ("La ristourne sera de 10%");
        }
        else echo("La ristourne sera de 0");
    };
    echo calculPriceFinal(1450);
    ?>
</body>
</html>