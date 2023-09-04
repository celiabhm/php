<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo connexion database Test</title>
</head>

<body>
    

    <?php
    $db = new PDO('mysql: host = localhost;dbname=Test','root','',
    array( PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION));
    $db ->setAttribute(PDO:: ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);
    
    ?>
</body>
</html>