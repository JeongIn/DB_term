<?php

$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$database = "c9";
$dbport = 3306;

$db = new mysqli($severname, $username, $password, $database, $dbport);

if ($db -> connect_error){
    die("Connection failed: " . $db->connect_error);
}

?>