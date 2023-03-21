<?php

session_start();
$_SESSION['meldung'] = 'Speicherung immer noch erfolgreich';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Seite 1</title>
</head>

<body>
    <h1>Seite 1</h1>
    <p>Die Session wurde gestartet und eine Meldung gespeichert.</p>
    <p><a href="seite2_unset.php">Seite 2 aufrufen</a></p>
</body>

</html>