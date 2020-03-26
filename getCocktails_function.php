<?php

// to get the cocktails data from the db

function getCocktails(PDO $aDB) : array {
    $query = $aDB->prepare("SELECT `name`, `alcohol_base`, `taste_profile`, `ingredients`, `method`, `strength`, `served`  FROM `cocktails`;");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}


