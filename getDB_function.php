
<?php
// to link to the DB

$servername = "db";

$username = "root";

$password = "password";

$dbname = "Cocktails";

function getDb(string $servername, string $dbname, string $username, string $password) : PDO {

    $db = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
};

$db= getDb("db", "Cocktails", "root", "password");