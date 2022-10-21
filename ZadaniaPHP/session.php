<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>

        <?php
            $_SESSION["number"] = 123;
            $_SESSION["text"] = "wyraz";
            $_SESSION["tab1"] = array(1,2,3,4,5);
            $_SESSION["tab2"] = array("a","b","c","d");
        ?>

    </body>
</html>