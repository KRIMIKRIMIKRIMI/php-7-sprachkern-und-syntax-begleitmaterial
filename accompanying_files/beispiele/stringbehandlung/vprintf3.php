<?php

$daten = [
    'Dieser Satz ist ein klein wenig zu lang. Vielleicht sollten wir ihn abschneiden?',
    10 / 3,
    'Ein weiterer Satz!',
];

$formatString1 = 'Der erste Satz: %s Die Ergebniszahl %f. Der zweite Satz: %s';
$formatString2 = 'Der erste Satz: %.10s... Die Ergebniszahl %.2f. Der zweite Satz: %d';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>vprintf</title>
</head>

<body>
    <p>
        Die Ausgabe ohne Modifikatoren:<br />
        <?php vprintf($formatString1, $daten); ?>
    </p>
    <p>
        Die Ausgabe mit Modifikatoren:<br />
        <?php vprintf($formatString2, $daten); ?>
    </p>
</body>

</html>