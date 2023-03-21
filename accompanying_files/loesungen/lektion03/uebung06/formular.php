<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Registrierung</title>
</head>

<body>
    <form action="formular.php" method="post">
        <label for="benutzername">Benutzername:</label>
        <input type="text" name="benutzername" id="benutzername" />
        <br />
        <label for="passwort1">Passwort:</label>
        <input type="password" name="passwort1" id="passwort1" />
        <br />
        <label for="passwort2">Passwort (erneut eingeben):</label>
        <input type="password" name="passwort2" id="passwort2" />
        <br />
        <input type="submit" value="registrieren" />
    </form>
</body>

</html>