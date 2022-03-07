<?php
    session_start();
    /*check if the user is logged in */
    if(!isset($_SESSION['username'])){
        header('location: login.php?error=pleaseLogin');
        exit();
    }
    include_once 'web-header.php'
?>

    <div class='profile-box'>
        <div class='avatar-img'>
            <img src='images/defult-avatar.png' width='100px' heigh='100px'>
        </div>
        <input class='profile-username' value='<?php echo $_SESSION['username']; ?>'>
        <input class='profile-email' value ='<?php echo $_SESSION['email']; ?>'>
        <!--<input class='profile-status' value ='<?php echo $_SESSION['status']; ?>'>-->
    </div>
<?php
    include_once 'web-footer.php'
?>