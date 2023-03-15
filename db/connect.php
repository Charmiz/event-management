<?php
/*
$servername = "ems-app-server.mysql.database.azure.com";
$username = "wnpanrdwat";
$password = "A7R5357CQ7C6017Q$";
$database = "ems-app-database";
*/

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$servername = $_SERVER['DB_HOST'];
$username = $_SERVER['DB_USERNAME'];
$password = $_SERVER['DB_PASSWORD'];
$database = $_SERVER['DB_DATABASE '];


$con = mysqli_connect($servername, $username, $password,$database);

?>
