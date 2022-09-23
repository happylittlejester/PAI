<html>
    <head>
        <title>Stronka</title>
    </head>
    <body>
        <?php
            
            for($x = 1; $x <= 10; $x++)
            {
               for($y = 1; $y <= 10; $y++)
               {
                    echo "$x * $y = ".$x * $y."<br>";
               }
               echo "<br>";
            }

            for($h = 1; $h <= 4; $h++)
            {
                echo "*";
               for($w = 1; $w < 8; $w++)
               {
                    if($h > 1 && $h < 4 && $w < 7)
                    {
                        echo " ";
                    }
                    else
                    {
                        echo "*";
                    }
               }
               echo "<br>";
            }
        ?>
    </body>
</html>