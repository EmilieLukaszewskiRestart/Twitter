<?php

require 'databasetwitter.php';
if (isset($_POST['submit'])) {
    header("Location: resultsearch.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche de twiit</title>
</head>
<body>
    <h1>Recherchez un twit</h1>
    <form action="resultsearch.php" method="GET">
    <input type="text" name="twitt" placeholder="Que cherchez-vous?" required>
    <button type="submit">Rechercher</button>
    </form>
    
</body>
</html>