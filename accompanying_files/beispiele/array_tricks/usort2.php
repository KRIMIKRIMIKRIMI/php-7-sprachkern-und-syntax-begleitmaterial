<?php

function vergleichsfunktion($a, $b)
{
    return $a - $b;
}

$zahlen = [3, 1, -3, -1, 8];

usort($zahlen, 'vergleichsfunktion');

?>
<pre><?php var_dump($zahlen); ?></pre>