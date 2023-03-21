<?php

$zahl1 = '10' + '25';
$zahl2 = '5.2' - '3.4';
$zahl3 = '5.2' * '10';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Dynamische Typwandlung - mathematisch</title>
</head>

<body>
    Wenn Sie zwei Strings addieren, die ausschließlich Ganzzahlen
    enthalten, werden diese in Integer-Typen umgewandelt und addiert:
    <?php echo $zahl1; ?><br />

    Wenn Sie zwei Strings subtrahieren, die ausschließlich Fließkommazahlen
    enthalten, werden diese in Double-Typen umgewandelt und dann
    voneinander abgezogen:
    <?php echo $zahl2; ?><br />

    Wenn Sie zwei Strings multiplizieren, die mit Zahlen BEGINNEN, werden
    diese Zahlen extrahiert (integer oder double) und die Zahlen dann
    multipliziert:
    <?php echo $zahl3; ?><br />
</body>

</html>