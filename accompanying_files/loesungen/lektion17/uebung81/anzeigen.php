<?php

session_start();

// nicht existierende Variablen, Array-Elemente und leere Werte sind empty
$name = !empty($_SESSION['name']) ? $_SESSION['name'] : 'Gast';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Anzeigen</title>
</head>

<body>
    <p>Hallo <?php echo $name; ?>, schön dass Sie da sind!</p>

    <p><a href="eintragen.php">zum Eintragen</a></p>
</body>

</html>