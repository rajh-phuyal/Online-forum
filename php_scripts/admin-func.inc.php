<?php

function deleteUser($conn, $userID){
    $sql_query = "DELETE FROM users WHERE userId=".$userID;
    $result = mysqli_query($conn, $sql_query);

    if($result == 0){
        return false;
    }else{
        return true;
    }
}

function searchUser($conn, $username){
    $sql_query = "SELECT * FROM users WHERE username=".$username;
    $result = mysqli_query($conn, $sql_query);

    if($result){
        $data = mysqli_fetch_array($result);
        return array(true, $data[0], $data[1], $data[2], $data[4]);
    }
    else{
        return array(false, $result);
    }
}