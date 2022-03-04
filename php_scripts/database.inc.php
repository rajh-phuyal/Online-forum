<?php
/* file for the connection for the database */
$serverName = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'auth';

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword);

if (!$conn){
    die('Database connection Error : ' . mysqli_connect_error());
}