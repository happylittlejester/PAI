<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <form method="POST">
            <input type="submit" name="usun" value="usun sesje" />
        </form>
        <?php
            echo "Liczba: " . $_SESSION["number"] . ".<br>";
            echo "Text: " . $_SESSION["text"] . ".";

            if(isset($_POST['usun']))
            {
                session_unset();
                session_destroy();
            }
        ?>
        
    </body>
</html>