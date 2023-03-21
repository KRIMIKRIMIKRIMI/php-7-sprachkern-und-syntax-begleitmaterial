<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Formular</title>
</head>

<body>
    <form action="auslesen.php" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" />
        <br />
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" />
        <br />
        <label for="inhalt">Inhalt: </label>
        <textarea name="inhalt" id="inhalt"></textarea>
        <br />
        <label for="farbe">Lieblingsfarbe: </label>
        Rot<input type="radio" name="farbe" id="farbe" value="rot" />
        Grün<input type="radio" name="farbe" value="grün" />
        Blau<input type="radio" name="farbe" value="blau" />
        Schwarz<input type="radio" name="farbe" value="schwarz" />
        Gelb<input type="radio" name="farbe" value="gelb" />
        Grau<input type="radio" name="farbe" value="grau" />
        Braun<input type="radio" name="farbe" value="braun" />
        Rosa<input type="radio" name="farbe" value="rosa" />
        Magenta<input type="radio" name="farbe" value="magenta" />
        Cyan<input type="radio" name="farbe" value="cyan" />
        <br />
        <input type="submit" value="absenden" />
    </form>
</body>

</html>