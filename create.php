<?php
    include_once 'web-header.php'
?>
    <div>
        <form class="parent-form" action="php_scripts/" method="POST">
            <textarea class='big-input-field' name="talk-post" rows="4" cols="80" placeholder="Wanna Talk?"></textarea>
            <input class='submit-button' name='submit' type="submit" value="SEND">
        </form>
    </div>
<?php
    include_once 'web-footer.php'
?>