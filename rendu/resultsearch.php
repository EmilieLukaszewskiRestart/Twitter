<?php

require "databasetwitter.php";

$result=$_GET['twitt'];

$requete = $database->prepare("SELECT * FROM tweets WHERE content LIKE '%" . $result . "%'");

$requete->execute();

$alltweets = $requete->fetchAll(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats</title>
</head>
<body>
    <h1>Résultats</h1>
    
    <?php
    echo "Vous avez cherché: ";
    echo $_GET['twitt'];
    ?>
    
    <ul>
        <?php foreach($alltweets as $tweet) { ?>
            <li><?= $tweet['content']." ".$tweet['date'] ?></li>
            
        <?php } ?>
    </ul>

    
</body>
</html>