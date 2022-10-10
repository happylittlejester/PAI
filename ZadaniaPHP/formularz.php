<html>
    <head>
        <meta charset = "UTF-8">
        <title>Formularz</title>
    </head>
    <body>
        <form method=POST>
            Login
            <input type="text" name="login" />
            Haslo
            <input type="password" name="password" />
            <p>Zapamietaj mnie</p>
            <p><input type="radio" name="remember" value="y" />Tak</p>
            <p><input type="radio" name="remember" value="n" />Nie</p>
            <input type=submit />
        </form>
        <?php
            echo "Login: " . htmlspecialchars($_POST['login']) . ". ";
            if(isset($_POST['remember']))
            {
                if($_POST[''] == 'y')
                {
                    echo "Wybrano opcje 'Zapamietaj mnie'";
                }
                else
                {
                    echo "Nie wybrano opcji 'Zapamietaj mnie'";
                }
            }
            
        ?>

        <form method=POST>
            Pseudonim
            <input type="text" name="pseudonim" />
            Komentarz
            <input type="textarea" name="textarea" />
            <input type=submit />
        </form>
        <?php
        
        ?>

        <form method=POST>
            Wybierz owoc:
            <select name="owoc">
            <option value="banan">Banan</option>
            <option value="jablko">Jablko</option>
            <option value="gruszka">Gruszka</option>
            </select>
            <p>Wybierz Zwierze:</p>
            <p><input type="radio" name="zwierze" value="m" />Mężczyzna</p>
            <p><input type="radio" name="zwierze" value="k" />Kobieta</p>
            <p><input type="radio" name="plec" value="k" />Kobieta</p>
            <p>Ulubiona seria gier:</p>
            <p><input type="checkbox" name="gry1" value=1 />GTA</p>
            <p><input type="checkbox" name="gry2" value=1 />FIFA</p>
            <p><input type="checkbox" name="gry3" value=1 />Battlefield</p>
            <input type=submit />
        </form>
        <?php
        
        ?>
    </body>
</html>