<?php

// to send the cocktails data into the db from frontend

function send_data() {
    $name = $_POST['name'];
    $alcohol_base = $_POST['alcohol_base'];
    $taste_profile = $_POST['taste_profile'];
    $ingredients = $_POST['ingredients'];
    $method = $_POST['method'];
    $strength= $_POST['strength'];
    $served = $_POST['served'];
    $db= getDb("db", "Cocktails", "root", "password");
    $query = $db->prepare("INSERT INTO `cocktails` (`name`, `alcohol_base`, `taste_profile`, `ingredients`, `method`, `strength`, `served`)  VALUES (:username, :alcohol, :taste, :ingredient, :method, :strong, :serve);");
    $query->execute(['username' => $name, 'alcohol' => $alcohol_base, 'taste' => $taste_profile, 'ingredient' => $ingredients, 'method' => $method, 'strong' => $strength, 'serve' => $served]);

}

if (isset($_POST['submit'])) {
    send_data();
}
