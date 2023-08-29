<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo conditions 5</title>
</head>


<body>
    

    <?php
    function exoFinal(int $annee){
        if($annee%4 == 0 && $annee%100 != 0){
            echo ("l année $annee est une année bissextile");
        }
        else if($annee%400 == 0){
            echo ("l année $annee est une année bissextile");
        }
        else echo("l année $annee n’est pas une année bissextile");
    }
    exoFinal(20);
    ?>
</body>
</html>