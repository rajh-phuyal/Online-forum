
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'rajh' && $password == '123456'){
        echo '<h1> LOGGED IN </h1>';
    }else{
        echo '<h1> Try again!! </h1>';
    }
    exit;
?>
