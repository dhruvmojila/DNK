<?php

$host = "localhost";
$dbUsername = "id15546664_root";
$dbPassword = "Dnk@12345678";
$dbname = "id15546664_dnkstore";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (!$conn) {
    die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} 
?>