<?php

function maskiereUmlaute($text)
{
    $suche = ['Ä', 'ä', 'Ö', 'ö', 'Ü', 'ü'];
    $ersetze = ['&Auml;', '&auml;', '&Ouml;', '&ouml;', '&Uuml;', '&uuml;'];

    return str_replace($suche, $ersetze, $text);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Maskiere Umlaute</title>
</head>

<body>
    <p><?php echo maskiereUmlaute('Hallöle!'); ?></p>
    <p><?php echo maskiereUmlaute('Dös ist öin sähr länglicher Däxd!'); ?></p>
    <p><?php echo maskiereUmlaute('Wir hätten auch die Funktion htmlspecialchars() verwenden können.'); ?></p>
</body>

</html>