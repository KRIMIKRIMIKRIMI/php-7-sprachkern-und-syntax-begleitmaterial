<?php

$test1 = 4;
$test2 = 7;

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Größer als</title>
</head>

<body>
    <h1>Größer als</h1>
    <p>
        5 ist größer als 3:
        <?php echo 5 > 3; ?>
    </p>
    <p>
        3 ist nicht größer als 5:
        <?php echo 3 > 5; ?>
    </p>
    <p>
        3 ist nicht größer als 3:
        <?php echo 3 > 3; ?>
    </p>
    <p>
        Der Inhalt von $test1 ist nicht größer als der Inhalt von $test2:
        <?php echo $test1 > $test2; ?>
    </p>
</body>

</html>