<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "bakery";
$conn = new mysqli($host, $user, $pass, $db);

$smtp -> set_charset("utf8");


if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}

?>