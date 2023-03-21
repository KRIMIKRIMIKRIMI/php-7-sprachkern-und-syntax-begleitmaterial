<?php

$bilder = ['bild2.jpg', 'bild10.jpg', 'Bild4.jpg', 'bild1.jpg'];

sort($bilder, SORT_STRING | SORT_FLAG_CASE);

?>
<pre><?php var_dump($bilder); ?></pre>