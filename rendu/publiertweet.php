<?php

require 'databasetwitter.php';
if (isset($_POST['submit'])) {
    header("Location: fildactu.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier un twiit</title>
</head>
<body>
    <h1>Rédigez votre twiit</h1>
    <form action="insertpublication.php" method="POST">
    <input type="text" name="twit" placeholder="Ecrivez votre réaction" required>
    <button type="submit">Publier le twiit</button>
    </form>
    
</body>
</html>