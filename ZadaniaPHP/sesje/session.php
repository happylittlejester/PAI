<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>

        <?php
            $_SESSION["number"] = 123;
            $_SESSION["text"] = "wyraz";
        ?>

    </body>
</html>