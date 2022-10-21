<html>
    <body>
        <form method="POST">
            <input type="submit" name="usun" value="usun cookies" />
        </form>
        <?php
            $cookie_name = "user";
            $cookie_value = "Alex Porter";

            if(!isset($_COOKIE['user'])) {
                echo "Cookie named '" . $_COOKIE['user'] . "' is not set!";
            } 
            else 
            {
                echo "Cookie '" . $_COOKIE['user'] . "' is set!<br>";
                echo "Value is: " . $_COOKIE['user'];
            }
            if(isset($_POST['usun']))
            {
                echo "Cookie 'user' is deleted.";
                setcookie("user", "", time() - 3600);
            }
        ?>

    </body>
</html>