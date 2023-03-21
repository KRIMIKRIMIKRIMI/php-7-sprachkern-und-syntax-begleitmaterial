<?php

$staedte = [
    'Hamburg',
    'München',
    'Stuttgart',
    'Köln',
    'Frankfurt',
    'Berlin',
];
$test1 = 'Nürnberg';
$test2 = 'Köln';
$test3 = 'Dresden';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>in_array()</title>
</head>

<body>
    Ist die Stadt <?php echo $test1; ?> in der Liste?
    <?php echo in_array($test1, $staedte); ?><br />

    Ist die Stadt <?php echo $test2; ?> in der Liste?
    <?php echo in_array($test2, $staedte); ?><br />

    Ist die Stadt <?php echo $test3; ?> in der Liste?
    <?php echo in_array($test3, $staedte); ?><br />
</body>

</html>