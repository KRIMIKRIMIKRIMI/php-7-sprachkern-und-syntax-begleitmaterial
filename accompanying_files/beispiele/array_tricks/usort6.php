<?php

$zahlen = [3, 1, -3, -1, 8];

usort($zahlen, function ($a, $b) {
    return $a <=> $b;
});

?>
<pre><?php var_dump($zahlen); ?></pre>