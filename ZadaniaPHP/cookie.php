<?php
    $cookie_name = "user";
    $cookie_value = "Alex Porter";
    setcookie($cookie_name, $cookie_value, time() + (3600), "/");
?>
<html>
    <body>

        <?php
            if(!isset($_COOKIE['user'])) 
            {
                echo "Cookie named '" . $_COOKIE['user'] . "' is not set!";
            } 
            else 
            {
                echo "Cookie '" . $_COOKIE['user'] . "' is set!<br>";
            }
        ?>

    </body>
</html>