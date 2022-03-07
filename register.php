<?php
    include_once 'web-header.php';
?>
    <form class="parent-form" action='php_scripts/register.inc.php' method='POST'>
        <legend>REGISTER</legend>
        <input class='input-field' name='username' type="text" placeholder="Username" autofocus>
        <input class='input-field' name='email' type="email" placeholder="Email">
        <input class='input-field' name='password' type="password" placeholder="Password">
        <input class='input-field' name='confirm-password'type="password" placeholder="Confirm Password">
        <input class='submit-button' name='submit' type="submit" value="SUBMIT">
        <?php require_once 'php_scripts/display-errors.inc.php';?>
        <p class="sleppy-text">
            Already have an Account?  <a class='form-redirect' href="login.php">LOG IN</a>
        </p>
    </form>
<?php
    include_once 'web-footer.php';
?> 