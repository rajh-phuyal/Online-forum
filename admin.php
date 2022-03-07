<?php
    session_start();
    /*check if the user is logged in */
    if(!isset($_SESSION['username'])){
        header('location: login.php?error=pleaseLogin');
        exit();
    }
    include_once 'web-header.php';
?>
    <div class='admin-space'>
        <div class='nav-left'>
            <ul>
                <li><a href='admin.php?operation=listusers'>Users</a></li>
                <li><a href='admin.php?operation=adduser'>Add a User</a></li>
                <li><a href='admin.php?operation=listposts'>Posts</a></li>
            </ul>
        </div>
        <div class='contents'>
            <?php
                include_once 'php_scripts/database.inc.php'; 
                include_once 'php_scripts/admin-func.inc.php';

                if(!isset($_GET['operation']) || $_GET['operation'] == 'listusers'){

                    /*check for the search option */
                    if(isset($_GET['submit'])){
                        $username = $_GET['search-username'];
                        $data = searchUser($conn, $username);
                        if($data[0]){
                            echo "<div class='profile-box'>";
                            echo "<input class='profile-userId' value='. $data[1] . '>";
                            echo "<input class='profile-username' value='. $data[2] . '>";
                            echo "<input class='profile-email' value='. $data[3] . '>";
                            echo "<input class='profile-status' value='. $data[4] . '>";
                            echo "</div>";
                        }
                        else{
                            echo "<div class='msg-box-failed'>";
                            echo "<h2> Couldn't find user with username : ".$username."</h2>";
                            echo "</div>";
                        }
                    }

                    /* check for the delete option */
                    if(isset($_GET['delete'])){
                        $userID = $_GET['delete'];
                        if(deleteUser($conn, $userID)){
                            echo "<div class='msg-box-success'>";
                            echo "<h2> User with UserId [".$userID."] have been removed!";
                            echo "</div>";
                        }
                        else{
                            echo "<div class='msg-box-failed'>";
                            echo "<h2> User with UserId [".$userID."] couldn't be removed!";
                            echo "</div>";
                        }
                    }

                    echo "<form class='search-container' action='admin.php' METHOD='GET'>";
                    echo "<input class='search-input' name='search-username' placeholder='Search by username' required>";
                    echo "<button type='submit' name='submit'><b>SEARCH</b></button>";
                    echo "</form>";

                    $sql_query = 'SELECT * FROM users';
                    $result = mysqli_query($conn, $sql_query);
                    $rowsTouched = mysqli_num_rows($result);

                    echo "<table class='data-table'>";
                    echo "<tr>";
                    echo "<th>UserID</th>";
                    echo "<th>Username</th>";
                    echo "<th>Email</th>";
                    echo "<th>Status</th>";
                    echo "<th>EDIT</th>";
                    echo "<th>DELETE</th>";
                    echo "</tr>";
                
                    for ($i=0; $i<$rowsTouched; $i++)
                    {
                        $data = mysqli_fetch_array($result);;
                        echo '<tr>';
                        echo '<td>'.$data['userId'].'</td>';
                        echo '<td>'.$data['username'].'</td>';
                        echo '<td>'.$data['email'].'</td>';
                        echo '<td>'.$data['status'].'</td>';
                        echo '<td><a href ="admin-func.inc.php?id='.$data['userId'].'">Edit</a></td>';
                        echo '<td><a href ="admin.php?delete='.$data['userId'].'" onclick="return confirm(\'Delete registration?\');">Delete</a></td>';
                        echo '<tr>';
                    }
                }
                elseif($_GET['operation'] == 'adduser'){
                    echo "<form class='parent-form' action='php_scripts/register.inc.php' method='POST'>";
                    echo "<legend>Add a user</legend>";
                    echo "<input class='input-field' name='username' type='text' placeholder='Username' autofocus>";
                    echo "<input class='input-field' name='email' type='email' placeholder='Email'>";
                    echo "<input class='input-field' name='password' type='password' placeholder='Password'>";
                    echo "<input class='input-field' name='confirm-password' type='password' placeholder='Confirm Password'>";
                    echo "<input class='input-field' name='status' type='text' placeholder='status'>";
                    echo "<input class='submit-button' name='submit' type='submit' value='SUBMIT'>";
                    require_once 'php_scripts/display-errors.inc.php';
                    echo "</form>";
                }
                else{
                    echo "<center><h1 style='color: white;'>No posts available!</h1></center>";
                }
                mysqli_close($conn);
            ?>
        </div>
    </div>
<?php
    include_once 'web-footer.php';
?>