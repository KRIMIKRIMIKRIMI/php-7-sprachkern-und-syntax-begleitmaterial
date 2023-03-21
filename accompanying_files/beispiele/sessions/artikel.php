<?php

// Array mit ein paar simulierten Artikeln
$artikel = [
    [
        'titel' => 'Lorem',
        'inhalt' => 'Ich bin ein Blindtext',
    ],
    [
        'titel' => 'Ipsum',
        'inhalt' => 'Ich bin noch ein Blindtext',
    ],
    [
        'titel' => 'Dolor',
        'inhalt' => 'Ich bin schon wieder ein Blindtext',
    ],
];

// Hole die ID aus dem Request
// Wurde keine übergeben, setze sie auf 0
$id = $_GET['id'] ?? 0;

// Wenn es den Artikel nicht gibt, Statuscode anpassen
if (!isset($artikel[$id])) {
    http_response_code(404);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Artikel</title>
</head>

<body>
    <?php if (isset($artikel[$id])) { ?>
        <h1><?php echo $artikel[$id]['titel']; ?></h1>
        <p><?php echo $artikel[$id]['inhalt']; ?></p>
    <?php } else { ?>
        <h1>Nicht gefunden!</h1>
        <p>Die gewünschte Information ist nicht verfügbar.</p>
    <?php } ?>
</body>

</html>