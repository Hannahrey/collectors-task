<?php

// to send the cocktails data into the db from frontend

function send_data() : array {
    //$db= getDb("db", "Cocktails", "root", "password");
    $query = $db->prepare("INSERT INTO (`name`, `alcohol_base`, `taste_profile`, `ingredients`, `method`, `strength`, `served`)  VALUES (:username, :alcohol, :taste, :ingredient, :how, :strong, :serve);");
    $query->execute([username => $name, alcohol => $alcohol_base, taste => $taste_profile, ingredient => $ingredients, how => $method, strong => $strength, serve => $served]);
    //$result = $query->fetchAll();
    //return $result;
}