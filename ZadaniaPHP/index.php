<html>
    <head>
        <meta charset = "UTF-8">
        <title>Funkcje</title>
    </head>
    <body>
        <form method=POST>
            <input type="number" name="wiek" />
            <input type="submit" />
        </form>
        <?php
            function sprawdzWiek($wiek)
            {
                if($wiek < 18)
                {
                    echo " Jestes Mlody";
                }
                else if($wiek >= 18 && $wiek < 60)
                {
                    echo " Jestes Dorosly";
                }
                else
                {
                    echo " Jestes Stary";
                }
            };

            if(isset($_POST['wiek']))
            {
                echo "Masz " . (int)$_POST['wiek'] . " lata.";
            }
            sprawdzWiek($_POST['wiek']);
        ?>
        
    </body>
</html>