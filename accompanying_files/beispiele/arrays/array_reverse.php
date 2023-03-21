<?php

$staedte = [
    'Hamburg',
    'München',
    'Stuttgart',
    'Köln',
    'Frankfurt',
    'Berlin',
];

$staedteUmgedreht = array_reverse($staedte);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>array_reverse()</title>
</head>

<body>
    <pre><?php var_dump($staedteUmgedreht); ?></pre>
</body>

</html>