<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Posts</title>
    <link rel="stylesheet" href="static/main.css">
    <link rel="stylesheet" href="static/forms.css">
    <link rel="stylesheet" href="static/profile.css">
</head>

<body>
    <header>
        <centre><a href="index.php"><img class='header-img' src='images/header_logo.png' width='56%' height='17%' alt='Know by Interaction!'></a></centre>
    </header>
    <nav>
        <div>
            <ul>
                <?php 
                    /*check if the user is logged in */
                    if(!isset($_SESSION['username'])){
                        echo "<li><a href='index.php'>Talks</a></li>";
                        echo "<li><a href='login.php'>Login</a></li>";
                        echo "<li><a href='register.php'>Register</a></li>";
                    }
                    else{
                        echo "<li><a href='create.php'>Create</a></li>";
                        echo "<li><a href='index.php'>Talks</a></li>";
                        echo "<li><a href='profile.php'>ME</a></li>";
                        if($_SESSION['status'] == 'admin'){
                            echo "<li><a href='admin.php'>ADMIN</a></li>";
                        }
                        echo "<li><a href='logout.php'>Logout</a></li>";
                    } 
                ?>
            </ul>
        </div>
    </nav>
    <div>