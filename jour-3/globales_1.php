<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 Super Globales</title>
</head>


<body>
<form class="formulaire_co" method="POST">
        <h1>Calcul</h1>
        <label for="fname">Nombre 1 : </label><br>
        <input type="number" id="numberF" name="numberF"><br><br>
        <label for="lname">Nombre 2 :</label><br>
        <input type="number" id="numberN" name="numberN"><br><br>
        <input type="submit" value="calculer">
    </form>

    <?php
    if(isset($_POST['numberF']) && isset($_POST['numberN'])){
        $numberF = $_POST['numberF'];
        $numberN= $_POST['numberN'];
        $total= $numberF + $numberN;
        echo "La somme de $numberF et de $numberN est : $total";
    }
    ?>

</body>
</html>