<?php

require 'databasetwitter.php';
$supp = $database->prepare("DELETE FROM tweets WHERE id = :id");
$supp->execute(
    [
        "id" => $_POST['supp']
    ]
    );

header("Location: fildactu.php");