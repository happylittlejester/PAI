<html>
    <head></head>
    <body>
        <form>
            <h3>Dane</h3>
            Imie 
            <input type="text" required /> <br><br>
            Ulica
            <input type="text" required />
            Nr Domu
            <input type="number" /> <br><br>
            Dostawa na godzine:
            <input type="time" /> <br><br>
            <h3>Stworz pizze</h3>
            Wybierz ciasto:
            <select name="ciasto">
            <option value="Cienkie">Cienkie</option>
            <option value="Srednie">Srednie</option>
            <option value="Grube">Grube</option>
            </select>
            <p>Wybierz sos:</p>
            <p><input type="radio" name="pomidorowy" value="Pomidorowy" />Pomidorowy</p>
            <p><input type="radio" name="smietanowy" value="Smietanowy" />Smietanowy</p>
            <p>Wybierz skladniki:</p>
            <p><input type="checkbox" name="skladniki[]" value="szynka" />Szynka</p>
            <p><input type="checkbox" name="skladniki[]" value="kurczak" />Kurczak</p>
            <p><input type="checkbox" name="skladniki[]" value="pieczarki" />Pieczarki</p>
            <p><input type="checkbox" name="skladniki[]" value="kukurydza" />Kukurydza</p>
            <p><input type="checkbox" name="skladniki[]" value="oliwki" />Oliwki</p>
            <input type=submit value="Zamawiam" />
        </form>
    </body>
</html>