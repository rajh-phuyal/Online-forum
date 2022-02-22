<?php

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    require_once 'database.inc.php';
    require_once 'errors.inc.php';

    if(isEmptyInputs($username, $email, $password, $confirmPassword) !== false ){
        header('location: ../register.php?error=emptyinput');
        exit();
    }

    if(invalidUsername($username) != false){
        header('location: ../register.php?error=invalidUsername');
        exit();
    }

    if(unmatchedMatch($password, $confirmPassword) != false){
        header('location: ../register.php?error=unmatchedPassword');
        exit();
    }

    if(weakPassword($password) !== false){
        header('location: ../register.php?error=weakPassword');
        exit();
    }

    if(userExists($conn, $username) !== false){
        header('location: ../register.php?error=usernameExists');
    }

} else {
    header('location: ../register.php?error=invalideFormSubmission');
}