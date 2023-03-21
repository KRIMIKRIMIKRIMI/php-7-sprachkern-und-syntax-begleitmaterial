<?php

$test1 = 'Hallo';
$test2 = 45 * 3.7;
$test3 = 7 . 5;

$datentypTest1 = gettype($test1);
$datentypTest2 = gettype($test2);
$datentypTest3 = gettype($test3);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Typtest</title>
</head>

<body>
    <p>
        Der Wert der Variable ist <?php echo $test1; ?> und
        dieser hat den Datentyp <?php echo $datentypTest1; ?>!
    </p>
    <p>
        Der Wert der Variable ist <?php echo $test2; ?> und
        dieser hat den Datentyp <?php echo $datentypTest2; ?>!
    </p>
    <p>
        Der Wert der Variable ist <?php echo $test3; ?> und
        dieser hat den Datentyp <?php echo $datentypTest3; ?>!
    </p>
</body>

</html>