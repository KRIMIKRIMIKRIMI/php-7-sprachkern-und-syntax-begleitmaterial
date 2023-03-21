<?php

$staedte = [
    'Hamburg',
    'München',
    'Stuttgart',
    'Köln',
    'Frankfurt',
    'Berlin',
];

$passwoerter = [
    'bernd' => 'geheim',
    'klaus' => 'sehrgeheim',
    'claudia' => '12345',
    'sabine' => 'sagnix',
];

$keysStaedte = array_keys($staedte);
$keysPasswoerter = array_keys($passwoerter);

?>
<pre><?php var_dump($keysStaedte); ?></pre>
<pre><?php var_dump($keysPasswoerter); ?></pre>