<?php

/* checks if any inputs are empty*/
function isEmptyInputs($username, $email, $password, $confirmPassword){
    $result;
    if(empty($username) || empty($email) || empty($password) || empty($confirmPassword)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

/* checks if the entered username is invalid*/
function invalidUsername($username){
    $result;
    if(!preg_match("/^[a-zA-z0-9]*$/", $username)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

/* checks if both entered passwords match*/
function unmatchedMatch($password, $confirmPassword){
    $result;
    if($password !== $confirmPassword){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

/* checks if the entered password is weak */
function weakPassword($password){
    $result;
    if(strlen($password) < 8 ){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

/* checks if the user already exists in the database */
function userExists($conn, $username){
    $result;

    $query = 'SELECT * FROM users WHERE username=?;';
    $data = mysqli_query($conn, $query);
    $affected_rows = mysqli_num_rows($data);
    
    if($affected_rows == 1){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}