<?php

$benutzer = [
    2 => 'bernd',
    3 => 'sabine',
    6 => 'klaus',
    9 => 'claudia',
];

$ersterKey = array_key_first($benutzer); // 2
$zweiterKey = array_key_last($benutzer); // 9

?>
<pre><?php var_dump($ersterKey, $zweiterKey); ?></pre>