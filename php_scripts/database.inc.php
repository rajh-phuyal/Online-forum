/* file for the connection for the database */
<?php

$serverName = 'localhost:3309';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'auth';

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn){
    die('Database connection Error : ' . mysqli_connect_erro());
}