<?php

// to get the cocktails data from the db

require_once './getDB_function.php';

function getCocktails() : array {
    $db= getDb("db", "Cocktails", "root", "password");
    $query = $db->prepare("SELECT `name`, `alcohol_base`, `taste_profile`, `ingredients`, `method`, `strength`, `served`  FROM `cocktails`;");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

$result = getCocktails();
