<?php

function multipliziere($multiplikator, ...$zahlen)
{
    $ergebnis = [];
    foreach ($zahlen as $zahl) {
        $ergebnis[] = $zahl * $multiplikator;
    }
    
    return $ergebnis;
}

?>
<pre><?php var_dump(multipliziere(2)); ?></pre>
<pre><?php var_dump(multipliziere(1, 2, 3)); ?></pre>
<pre><?php var_dump(multipliziere(2, 1, 2, 3)); ?></pre>
<pre><?php var_dump(multipliziere(-1, 1, 2, 3)); ?></pre>