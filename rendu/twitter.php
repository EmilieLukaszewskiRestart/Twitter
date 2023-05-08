
<?php

require "databasetwitter.php";


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portail</title>
    <link rel="stylesheet" href="twitter.css">
</head>
<body>
    <main>
        <h1>Inscription a Twiit'</h1>
        <form class="form" method="POST" action="fildactu.php">
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="text" name="pseudo" placeholder="Pseudo">
            <input type="text" name="mail" placeholder="Adresse mail">
            <input type="text" name="password" placeholder="Mot de passe">
            <input type="text" name="photo" placeholder="lien">
            <button type="submit">Envoyer</button> 
       </form>

    </main>
</body>
</html>