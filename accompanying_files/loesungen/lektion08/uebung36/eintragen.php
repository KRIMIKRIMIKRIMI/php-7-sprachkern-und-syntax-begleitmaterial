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
        <input type="submit" value="absenden" />
    </form>
</body>

</html>