<?php
/*
$servername = "ems-app-server.mysql.database.azure.com";
$username = "wnpanrdwat";
$password = "A7R5357CQ7C6017Q$";
$database = "ems-app-database";
*/
require 'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$servername = $_ENV['DB_HOST'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$database = $_ENV['DB_DATABASE '];


$con = mysqli_connect($servername, $username, $password,$database);

?>
