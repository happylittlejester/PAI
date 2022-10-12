<html>
    <head>
        <meta charset = "UTF-8">
        <title>Formularz</title>
    </head>
    <body>
        <form action="./formularz.php" method=POST>
            Login
            <input type="text" name="login" required />
            Haslo
            <input type="password" name="password" required />
            <p>Zapamietaj mnie</p>
            <p><input type="radio" name="remember" value="y" />Tak</p>
            <p><input type="radio" name="remember" value="n" />Nie</p>
            <input type=submit />
        </form>
        <?php
            
            if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['remember']))
            {
                echo "Login: ".$_POST['login'];
                echo "<br> Haslo: ".sha1($_POST['password']);
                if($_POST['remember'] == 'y')
                {
                    echo "<br> Wybrano opcje 'Zapamietaj mnie'";
                }
                else
                {
                    echo "<br> Nie wybrano opcji 'Zapamietaj mnie'";
                }
            }
            
        ?>
        <hr>
        <form method=POST>
            Pseudonim
            <input type="text" name="pseudonim" />
            Komentarz
            <input type="textarea" name="textarea" />
            <input type=submit />
        </form>
        <?php
            if(isset($_POST['pseudonim']) && isset($_POST['textarea']))
            {
                echo "Pseudonim: <br>".$_POST['pseudonim'];
                echo "<br> Komentarz 1: <br>".$_POST['textarea'];
                echo "<br> Komentarz 2: <br>".htmlspecialchars($_POST['textarea']);
            }
        ?>
        <hr>
        <form method=POST>
            Wybierz owoc:
            <select name="owoc">
            <option value="Banan">Banan</option>
            <option value="Jablko">Jablko</option>
            <option value="Gruszka">Gruszka</option>
            </select>
            <p>Wybierz zwierze domowe:</p>
            <p><input type="radio" name="zwierze" value="Pies" />Pies</p>
            <p><input type="radio" name="zwierze" value="Kot" />Kot</p>
            <p><input type="radio" name="zwierze" value="Ryba" />Ryba</p>
            <p>Wybierz jezyk:</p>
            <p><input type="checkbox" name="jezyk[]" value="Polski" />Polski</p>
            <p><input type="checkbox" name="jezyk[]" value="Angielski" />Angielski</p>
            <p><input type="checkbox" name="jezyk[]" value="Niemiecki" />Niemiecki</p>
            <input type=submit />
        </form>
        <?php
            if(isset($_POST['owoc']) && isset($_POST['zwierze']))
            {
                echo "Twoje wybory to ".$_POST['owoc']." , ".$_POST['zwierze']." , ";
                if(isset($_POST['jezyk']))
                {
                    for($i = 0; $i < count($_POST['jezyk']); $i++)
                    {
                        echo $_POST['jezyk'][$i] . " , ";
                    }
                }
                else
                {
                    echo "Nie wybrano ani jednego jezyka";
                }
            }
        ?>
        <hr>
        <form method = "POST">
            Imie
	        <input type="text" name="name" required />
            Nazwisko
	        <input type="text" name="lastname" required />
	        <p>Wybierz plec:</p>
            <p><input type="radio" name="plec" value="k" />Kobieta</p>
            <p><input type="radio" name="plec" value="m" />Mezczyzna</p>
            <input type="submit" />
        </form>
        <?php
            if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['plec']))
            {
                if($_POST['plec'] == 'k')
                {
                    echo "Witam Pania ".$_POST['name'];
                }
                else
                {
                    echo "Witam Pana ".$_POST['name'];
                }
            }
        ?>
        <hr>
        <form method = "POST">
    </body>
</html>