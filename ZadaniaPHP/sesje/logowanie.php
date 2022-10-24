<?php
    session_start();
?>

<html>
    <body>
        <form method="POST">
            <input type="text" name="login" />
            <input type="password" name="password" />
            <br>
            <input type="submit" />
        </form>
        <?php
            $_SESSION["login"] = $_POST['login'];
            $_SESSION["password"] = sha1($_POST['password']);
            echo "Session variables are set.";
        ?>
    </body>
</html>