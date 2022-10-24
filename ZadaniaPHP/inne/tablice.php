<html>
    <head>
        <meta charset = "UTF-8">
        <title>Stronka</title>
    </head>
    <body>
        <?php
            //tablice jednowymiarowe
            /*
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
            */

            //tablice wielowymiarowe
            /*
            $products = array(
                'paper' => array(
                    'copier' => "Do kserokopiarek i uniwersalny",
                    'inkjet' => "Do drukarek atramentowych",
                    'laser' => "Do drukarek laserowych",
                    'photo' => "Papier fotograficzny"),
                'pens' => array(
                    'ball' => "Długopisy",
                    'hilite' => "Markery przezroczyste",
                    'marker' => "Markery zwykłe"),
                'misc' => array(
                    'tape' => "Taśmy klejące",
                    'glue' => "Kleje",
                    'clips' => "Spinacze")
                );
            
            echo "<pre>";
            foreach($products as $section => $items)
                foreach($items as $key => $value)
                    if($key == 'copier' || $key == 'ball' || $key == 'tape')
                    {
                        echo "$section: \t $key \t ($value)<br>";
                    }
            echo "</pre>";  
            
            /*echo $products['paper']['copier'];
            echo "<br>";
            echo $products['pens']['ball'];
            echo "<br>";
            echo $products['misc']['tape'];*/

            echo "<br>";
            
            
            $chessboard = array(
                array('w','s','g','h','k','g','s','w'),
                array('p','p','p','p','p','p','p','p'),
                array(' ',' ',' ',' ',' ',' ',' ',' '),
                array(' ',' ',' ',' ',' ',' ',' ',' '),
                array(' ',' ',' ',' ',' ',' ',' ',' '),
                array(' ',' ',' ',' ',' ',' ',' ',' '),
                array('P','P','P','P','P','P','P','P'),
                array('W','S','G','H','K','G','S','W'),
            );
            echo "<pre>";
            foreach($chessboard as $row)
            {
                foreach($row as $piece)
                {
                    echo "$piece ";
                }
                echo "<br>";
            }
            echo "</pre>"; 

            $chessboard[6][4] = ' ';
            $chessboard[5][4] = 'P';

            echo "<br>";
            echo "<pre>";
            foreach($chessboard as $row)
            {
                foreach($row as $piece)
                {
                    echo "$piece ";
                }
                echo "<br>";
            }
            echo "</pre>"; 
        ?>
    </body>
</html>