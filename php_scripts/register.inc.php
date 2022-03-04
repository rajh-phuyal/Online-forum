<?php

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $passwd = $_POST['password'];
    $confirmPasswd = $_POST['confirm-password'];
    $stat = 'nuser'; /* only normal users will be submitting this form */

    require_once 'database.inc.php';
    mysqli_select_db($conn, 'auth');
    require_once 'errors.inc.php';

    if(isEmptyInputs($username, $email, $passwd, $confirmPasswd) !== false ){
        header('location: ../register.php?error=emptyFields');
        exit();
    }

    if(invalidUsername($username) != false){
        header('location: ../register.php?error=invalidUsername');
        exit();
    }

    if(unmatchedMatch($passwd, $confirmPasswd) != false){
        header('location: ../register.php?error=unmatchedPassword');
        exit();
    }

    if(weakPassword($passwd) !== false){
        header('location: ../register.php?error=weakPassword');
        exit();
    }

    if(userExists($conn, $username) !== false){
        header('location: ../register.php?error=usernameExists');
        exit();
    }

    /* save the user in the database */
    $passwd = md5($passwd);
    $sql_query = "INSERT INTO users(username, email, password, status) VALUES('$username', '$email', '$passwd', '$stat')";
    $result = mysqli_query($conn, $sql_query);

    if($result){
        header('location: ../login.php?msg=successfullyRegistered');
    }else {
        header('location: ../register.php?error=couldntRegisterUser');
    }

} else {
    header('location: ../register.php?error=invalideFormSubmission');
}