<?php

$staedte = [
    'Hamburg',
    'München',
    'Stuttgart',
    'Köln',
    'Frankfurt',
    'Berlin',
];
$tests = [
    'Nürnberg',
    'Köln',
    'Dresden',
];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>in_array()</title>
</head>

<body>
    <?php foreach ($tests as $test) { ?>
        Ist die Stadt <?php echo $test; ?> in der Liste?
        <?php echo in_array($test, $staedte); ?><br />
    <?php } ?>
</body>

</html>