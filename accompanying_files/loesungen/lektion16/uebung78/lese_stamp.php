<?php

// wenn die Datei noch nicht existiert, wird eine Warnung angezeigt
$timestamp = file_get_contents('zeit.txt');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Timestamp</title>
</head>

<body>
    <p>Der gespeicherte Timestamp ist <?php echo $timestamp; ?>.</p>
    <p>Als formatiertes Datum ist dies <?php echo strftime('%d.%m.%Y %H:%M Uhr', $timestamp); ?>.</p>
</body>

</html>