<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat exo Calculatrice</title>
</head>


<body>
    

    <?php
    if(isset($_POST['nbr']) && isset($_POST['nbrN']) && isset($_POST['op'])){
        $nbr = $_POST['nbr'];
        $nbrN= $_POST['nbrN'];
        $op= $_POST['op'];
        switch ($op) {
            case 'calcul1':
                echo $nbr+$nbrN;
                break;
            case 'calcul2':
                echo $nbr-$nbrN;
                break;
            case 'calcul3':
                echo $nbr/$nbrN;
                break;
        }
    }
    // OU voir fonction eval //
    ?>
</body>
</html>