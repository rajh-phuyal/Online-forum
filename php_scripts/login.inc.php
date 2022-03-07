<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    include_once 'database.inc.php';

    if(empty($username) || empty($password)){
        header('location: login.php?error=emptyFields');
        exit();
    }

    $password = md5($password);
    $sql_query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql_query);
    $rowsTouched = mysqli_num_rows($result);

    if($rowsTouched > 0){
        $data = mysqli_fetch_array($result);
        session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['status'] = $data['status'];
        header('location: index.php?status='.$data['status']);
        exit();
    }else {
        header('location: login.php?error=incorrectUnameOrPasswd');
        exit();
    }
}