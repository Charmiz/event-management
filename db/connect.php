<?php

$servername = "ems-app-server.mysql.database.azure.com";
$username = "wnpanrdwat";
$password = "A7R5357CQ7C6017Q$";
$database = "ems-app-database";

// Create connection
$db = mysqli_init();
$db->ssl_set(
    '/etc/mysql/ssl/client-key.pem',
    '/etc/mysql/ssl/client-cert.pem',
    '/etc/mysql/ssl/ca-cert.pem',
    NULL,
    NULL);
$con = mysqli_real_connect($db,$servername, $username, $password,$database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
