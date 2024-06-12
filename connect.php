<?php

$host = "sql111.infinityfree.com";
$user = "if0_36714566";
$pass = "c4p8uNAYpxev";
$db = "if0_36714566_pectosdb";
$conn = new mysqli($host, $user, $pass, $db);

$smtp -> set_charset("utf8");


if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}

?>