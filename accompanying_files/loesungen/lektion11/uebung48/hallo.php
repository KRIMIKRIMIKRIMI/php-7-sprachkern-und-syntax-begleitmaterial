<?php

if (!isset($_GET['vorname']) && !isset($_GET['nachname'])) {
    $nachricht = 'Vor- und Nachname fehlt!';
} elseif (!isset($_GET['vorname'])) {
    $nachricht = 'Vorname fehlt!.';
} elseif (!isset($_GET['nachname'])) {
    $nachricht = 'Nachname fehlt!.';
} else {
    $nachricht = 'Hallo ' . $_GET['vorname'] . ' ' . $_GET['nachname'];
    $nachricht .= '. Schön, dass Sie wieder da sind.';
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Hallo</title>
</head>

<body>
    <p><?php echo $nachricht; ?></p>
</body>

</html>