<?php
    session_start();

    /*check if the user is logged in */
    if(!isset($_SESSION['user'])){
        header('location: login.php?error=pleaseLogin');
        exit();
    }
    include_once 'web-header.php'
?>

    <div class='profile-box'>
        <h1>shf vahkv</h1>
        <h1>shf vahkv</h1>
        <h1>shf vahkv</h1>
        <h1>shf vahkv</h1>
        <h1>shf vahkv</h1>
    </div>
<?php
    include_once 'web-footer.php'
?>