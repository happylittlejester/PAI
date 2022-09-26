<html>
    <head>
        <meta charset = "UTF-8">
        <title>Stronka</title>
    </head>
    <body>
        <?php
            $books[] = "Tytul1";
            $books[] = "Tytul2";
            $books[] = "Tytul3";
            $books[] = "Tytul4";
        
            for($i = 3; $i >= 0; $i--)
            {
                echo "$i: $books[$i] <br>";
            }

            echo "<br>";

            $tab['ksiazka'] = "tytuł ksiazki";
            $tab['piosenka'] = "tytuł piosenki";
            $tab['serial'] = "tytuł serialu";
            $tab['film'] = "tytuł filmu";

            echo $tab['ksiazka'];
            echo "<br>";
            echo $tab['film'];

        ?>
    </body>
</html>