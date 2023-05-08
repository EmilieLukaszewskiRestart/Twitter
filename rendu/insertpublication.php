<?php

require 'databasetwitter.php';
$insert = $database->prepare("INSERT INTO tweets(content) VALUES (:contenu)");
$insert->execute(
    [
        "contenu"=> $_POST['twit']
    ]
);

header("Location: fildactu.php");