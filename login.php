<?php
    include_once 'web-header.php';
?> 
        <form class="parent-form" action="php_scripts/login.inc.php" method="POST">
            <legend>LOGIN</legend>
            <input class='input-field' name="username" type="text" placeholder="Username" autofocus>
            <input class='input-field' name="password" type="password" placeholder="Password">
            <?php require_once 'php_scripts/display-errors.inc.php';?>
            <input class='submit-button' name='submit' type="submit" value="SUBMIT">
            <p class="sleppy-text">
                Don't have an Account?  <a class='form-redirect' href="register.php">REGISTER</a>
            </p>
        </form>

<?php
    include_once 'web-footer.php';
?> 
