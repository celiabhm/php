<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo boucles 1</title>
</head>


<body>
    <?php
    $nbAleatoire= rand(0,999);
    $a=2;
    $boucleTour =0;
    while($a != $nbAleatoire){
        $nbAleatoire = rand(0,999);
        ++$boucleTour;
    }
    echo($boucleTour);
    ?>
</body>
</html>