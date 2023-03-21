<?php

session_start();
unset($_SESSION['name']);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Löschen</title>
</head>

<body>
    <p>Die Daten wurden gelöscht.</p>

    <p><a href="eintragen.php">zum Eintragen</a></p>
    <p><a href="anzeigen.php">zur Anzeige</a></p>
</body>

</html>