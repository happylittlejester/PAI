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

            echo "<br>Tablica nr: ";
            print_r($_SESSION["tab1"]);
            echo "<br>Tablica text: ";
            print_r($_SESSION["tab2"]);
        ?>
        <form method="POST">
            <input type="number" />
            <input type="submit" value="dodaj" />
        </form>
        <form method="POST">
            <input type="text" />
            <input type="submit" value="dodaj" />
        </form>
        <?php
            
        ?>
    </body>
</html>