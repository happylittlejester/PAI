<?php
    session_start();
?>

<html>
    <body>
        <form method="POST">
            <input type="submit" name="usun" value="usun sesje" />
        </form>
        <?php
            echo "Witaj ".$_SESSION["login"]." !";
            echo "<br>Twoje zaszyfrowane haslo to: ".$_SESSION["password"];
            if(isset($_POST['usun']))
            {
                session_unset();
                session_destroy();
            }
        ?>
    </body>
</html>