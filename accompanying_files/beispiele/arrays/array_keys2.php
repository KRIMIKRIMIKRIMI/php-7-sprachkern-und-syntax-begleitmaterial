<?php

$passwoerter = [
    'bernd' => 'geheim',
    'sabine' => 'sagnix',
    'klaus' => '12345',
    'claudia' => 'geheim',
];

$keysGeheim = array_keys($passwoerter, 'geheim');

?>
<pre><?php var_dump($keysGeheim); ?></pre>