<?php

require "databasetwitter.php";

$requete = $database->prepare("SELECT * FROM tweets ORDER BY date DESC");

$requete_d = $database->prepare("SELECT * FROM users");


$requete->execute();

$requete_d->execute();

$alltweets = $requete->fetchAll(PDO::FETCH_ASSOC);

$usertest = $requete_d->fetchAll(PDO::FETCH_ASSOC);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fil d'actualité</title>
</head>
<body>
    <h1>Fil d'actualité</h1>
    <form class="form" method="POST" action="publiertweet.php">
        <button type="submit">Ajouter un twiit</button>
    </form>
    </form>
    <form method="POST" action="searchtweet.php">
    <button type="submit">Rechercher un twiit</button>

    </form>

    <ul>
        <?php foreach($alltweets as $tweet) { ?>
        
            <img src=<?=$usertest[0]['photo']?>>
            <li><?= $tweet['content']." ".$tweet['date']." ".$usertest[0]['pseudo'] ?></li>
            <form action="deletetwitter.php" method="POST">
              
                <input type="hidden" name="supp" value="<?= $tweet['id'] ?>">
                <button type="submit">Supprimer</button>


            </form>
        <?php } ?>
    </ul>

    
</body>
</html>