<?php

$zahlen = [3, 1, -3, -1, 8];

usort($zahlen, fn($a, $b) => $a <=> $b);

?>
<pre><?php var_dump($zahlen); ?></pre>