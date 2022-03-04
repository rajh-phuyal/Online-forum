<?php 

session_start();

/*check if the user is logged in */
if(!isset($_SESSION['user'])){
	echo "<li><a href='create.php'>Create</a></li>";
	echo "<li><a href='index.php'>Talks</a></li>";
	echo "<li><a href='profile.php'>ME</a></li>";
	echo "<li><a href='logout.php'>Logout</a></li>";
}
else{
	echo "<li><a href='index.php'>Talks</a></li>";
	echo "<li><a href='login.php'>Login</a></li>";
    echo "<li><a href='register.php'>Register</a></li>";
}


                
                
                