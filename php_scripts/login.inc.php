<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    include_once 'database.inc.php';
    mysqli_select_db($conn, 'auth');

    if(empty($username) || empty($password)){
        header('location: ../login.php?error=emptyFields');
        exit();
    }

    $password = md5($password);
    $sql_query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql_query);
    $rowsTouched = mysqli_num_rows($result);

    if($rowsTouched > 0){
        header('location: ../index.php');
        exit();
    }else {
        header('location: ../login.php?error=incorrectUnameOrPasswd');
        exit();
    }

} else {
    header('location: ../login.php');
}