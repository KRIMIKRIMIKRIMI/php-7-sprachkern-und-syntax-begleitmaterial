<?php

$addition = 5;
$subtraktion = 7;
$multiplikation = 8;
$division = 12;
$modulo = 9;
$potenz = 3;
$verkettung = 'Hallo';

// ist gleich $addition = $addition + 3
$addition += 3;

// ist gleich $subtraktion = $subtraktion - 2
$subtraktion -= 2;

// ist gleich $multiplikation = $multiplikation * 3
$multiplikation *= 3;

// ist gleich $division = $division / 4
$division /= 4;

// ist gleich $modulo = $modulo % 2
$modulo %= 2;

// ist gleich $potenz = $potenz ** 2
$potenz **= 2;

// ist gleich $verkettung = $verkettung . ' Welt';
$verkettung .= ' Welt';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Zuweisungen</title>
</head>

<body>
    Addition: <?php echo $addition; ?><br />
    Subtraktion: <?php echo $subtraktion;  ?><br />
    Multiplikation: <?php echo $multiplikation; ?><br />
    Division: <?php echo $division; ?><br />
    Modulo: <?php echo $modulo; ?><br />
    Potenz: <?php echo $potenz; ?><br />
    Verkettung: <?php echo $verkettung; ?><br />
</body>

</html>