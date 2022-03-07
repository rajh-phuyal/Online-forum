<?php
    if(isset($_GET['error'])){
        if($_GET['error'] == 'incorrectUnameOrPasswd'){
            echo "<p class='error-msgs'>Incorrect Data!</p>";
        }
        elseif($_GET['error'] == 'emptyFields'){
            echo "<p class='error-msgs'>Empty Field Detected!</p>";
        }
        elseif($_GET['error'] == 'invalidUsername'){
            echo "<p class='error-msgs'>[1-0 | A-Z | a-Z]only</p>";
        }
        elseif($_GET['error'] == 'unmatchedPassword'){
            echo "<p class='error-msgs'>Typo? Enter passwords again!</p>";
        }
        elseif($_GET['error'] == 'weakPassword'){
            echo "<p class='error-msgs'>Grandma´s password!!!</p>";
        }
        elseif($_GET['error'] == 'usernameExists'){
            echo "<p class='error-msgs'>Maybe a different username?</p>";
        }
        elseif($_GET['error'] == 'couldntRegisterUser'){
            echo "<p class='error-msgs'>Sorry Try again!</p>";
        }
        elseif($_GET['error'] == 'invalideFormSubmission'){
            echo "<p class='error-msgs'>Wrong way!</p>";
        }
        elseif($_GET['error'] == 'pleaseLogin'){
            echo "<p class='error-msgs'>Identify yourself!<p>";
        }
    }
    if(isset($_GET['msg'])){
        if($_GET['msg'] == 'successfullyRegistered'){
            echo "<p class='simple-msgs'>Hope you remembered the password</p>";
        }
    }
    ?>