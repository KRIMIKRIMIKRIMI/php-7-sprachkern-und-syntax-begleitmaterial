<?php

if (isset($_GET['vorname']) && isset($_GET['nachname'])) {
    $nachricht = 'Hallo ' . $_GET['vorname'] . ' ' . $_GET['nachname'];
    $nachricht .= '. Schön, dass Sie wieder da sind.';
} else {
    $nachricht = 'Wer sind Sie?';
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