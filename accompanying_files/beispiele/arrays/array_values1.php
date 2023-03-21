<?php

$passwoerter = [
    'bernd' => 'geheim',
    'klaus' => 'sehrgeheim',
    'claudia' => '12345',
    'sabine' => 'sagnix',
];

$valuesPasswoerter = array_values($passwoerter);

?>
<pre><?php var_dump($valuesPasswoerter); ?></pre>