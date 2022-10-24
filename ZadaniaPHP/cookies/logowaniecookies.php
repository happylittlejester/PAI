<?php
    setcookie("login");
    setcookie("password");
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
            echo "Session variables are set.";
            setcookie("login",$_POST['login']);
            setcookie("password",sha1($_POST['password']));
        ?>
    </body>
</html>