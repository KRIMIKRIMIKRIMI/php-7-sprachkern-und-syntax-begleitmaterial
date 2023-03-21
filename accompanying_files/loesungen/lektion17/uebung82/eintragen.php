<?php

session_start();

if ($_POST) {
    $_SESSION['name'] = $_POST['name'];
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Eintragen</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="name" />
        <input type="submit" value="Eintragen" />
    </form>

    <p><a href="anzeigen.php">zur Anzeige</a></p>
    <p><a href="loeschen.php">zum Löschen</a></p>
</body>

</html>