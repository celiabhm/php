<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat exo Login</title>
</head>


<body>
    
    <?php
    if(isset($_POST['fname'])){
        $fname = $_POST['fname'];
        echo "Bonjour $fname";
    }
    ?>
</body>
</html>