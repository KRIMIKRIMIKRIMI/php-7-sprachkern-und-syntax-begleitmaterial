<?php

$datei = 'datei.txt';

// Setze den Text auf eine passende Meldung, wenn die Datei noch nicht existiert.
if (file_exists($datei)) {
    $text = file_get_contents($datei);
} else {
    $text = vsprintf(
        'Die Datei "%s" existiert (noch) nicht!',
        [$datei]
    );
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Der Text</title>
</head>

<body>
    <p><?php echo htmlspecialchars($text); ?></p>
</body>

</html>