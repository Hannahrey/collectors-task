<?php

// to get the cocktails data from the db

function getCocktails() : array {
    $db= getDb("db", "Cocktails", "root", "password");
    $query = $db->prepare("SELECT `name`, `alcohol_base`, `taste_profile`, `ingredients`, `method`, `strength`, `served`  FROM `cocktails`;");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}


