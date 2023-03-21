<?php

function vergleichsfunktion($a, $b)
{
    return $a <=> $b;
}

$zahlen = [3.5, 3, 0.75, 1.5, 4, -3.25, 1.75, 0.5, -0.25];

usort($zahlen, 'vergleichsfunktion');

?>
<pre><?php var_dump($zahlen); ?></pre>