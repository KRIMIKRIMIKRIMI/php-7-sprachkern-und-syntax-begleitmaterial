<?php

function vergleichsfunktion($a, $b)
{
    if ($a < $b) {
        $ergebnis = -1;
    } elseif ($a > $b) {
        $ergebnis = 1;
    } else {
        $ergebnis = 0;
    }
    
    return $ergebnis;
}

$zahlen = [1 => 3.5, 3 => 1.5, 4 => 3.25, 8 => 1.75];

usort($zahlen, 'vergleichsfunktion');

?>
<pre><?php var_dump($zahlen); ?></pre>