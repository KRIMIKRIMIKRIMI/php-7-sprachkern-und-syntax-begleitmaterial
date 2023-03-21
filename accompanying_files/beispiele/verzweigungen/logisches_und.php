<?php

$zahl1 = 8;
$zahl2 = 2;
$zahl3 = 35;

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Logisches Und</title>
</head>

<body>
    <h1>Logisches Und</h1>
    <p>
        Die Zahl <?php echo $zahl1; ?> ist
        größer/gleich 5 UND kleiner/gleich 20:
        <?php echo $zahl1 >= 5 && $zahl1 <= 20; ?>
    </p>
    <p>
        Die Zahl <?php echo $zahl2; ?> ist
        NICHT größer/gleich 5 aber kleiner/gleich 20:
        <?php echo $zahl2 >= 5 && $zahl2 <= 20; ?>
    </p>
    <p>
        Die Zahl <?php echo $zahl3; ?> ist
        größer/gleich 5 aber NICHT kleiner/gleich 20:
        <?php echo $zahl3 >= 5 && $zahl3 <= 20; ?>
    </p>
</body>

</html>