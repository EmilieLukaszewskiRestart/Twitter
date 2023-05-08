<?php

require 'databasetwitter.php';
$insert = $database->prepare("INSERT INTO users(nom, pseudo,mail,password,photo) VALUES (:nameid, :username, :email, :mdp, :img)");
$insert->execute(
    [
        "nameid"=> $_POST['nom'],
        "username"=> $_POST['pseudo'],
        "email"=> $_POST['mail'],
        "mdp"=> $_POST['password'],
        "img"=> $_POST['photo']

    ]
);

header("Location: twitter.php");