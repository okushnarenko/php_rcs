<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "root"; //for MAC or "" for windows
$dbname = "php_rcs";

//Create connection
$db = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

function dd($attr) {
    echo '<pre>';
    var_dump($attr);
    die;
}

