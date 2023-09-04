<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo calculatrice bonus</title>
</head>

<body>
    
    <form class="formulaire_co" method="POST" action="resultat.php">
        <h1>Calculatrice</h1>
        <!-- Input type number -->
        <label for="nbr">Nombre 1 : </label><br>
        <input type="number" id="nbr" name="nbr" step=0,01><br><br>
        <label for="lname">Nombre 2 :</label><br>
        <input type="number" id="nbrN" name="nbrN"><br><br>
        <!-- Input type select -->
    <label for="option">Choisi ton opérateur :</label><br>
    <select name="op" id="op">
        <optgroup label="choix">
        <option value="calcul1">+</option>
        <option value="calcul2">-</option>
        <option value="calcul3">/</option>
        </optgroup>
    </select><br>
        <input type="submit" value="Valider">
    </form>


</body>
</html>