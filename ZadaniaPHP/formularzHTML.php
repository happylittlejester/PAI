<html>
    <head></head>
    <body>
        <form>
            Wybierz ciasto:
            <select name="ciasto">
            <option value="Cienkie">Cienkie</option>
            <option value="Srednie">Srednie</option>
            <option value="Grube">Grube</option>
            </select>
            <p>Wybierz sos:</p>
            <p><input type="radio" name="pomidorowy" value="Pomidorowy" />Pomidorowy</p>
            <p><input type="radio" name="smietanowy" value="Smietanowy" />Smietanowy</p>
            <p><input type="radio" name="" value="" /></p>
            <p>Wybierz skladniki:</p>
            <p><input type="checkbox" name="skladniki[]" value="szynka" />Szynka</p>
            <p><input type="checkbox" name="skladniki[]" value="pieczarki" />Pieczarki</p>
            <p><input type="checkbox" name="skladniki[]" value="kukurydza" />Kukurydza</p>
            <p><input type="checkbox" name="skladniki[]" value="" /></p>
            <input type=submit />
        </form>
    </body>
</html>