<?php

$text = 'Ich bin nur ein ganz kleiner Blindtext';

/*
 * Als Trenner wird das Leerzeichen verwendet.
 * Sie erhalten also jedes einzelne Wort als einen Wert im Array.
 */
$woerter = explode(' ', $text);

?>
<pre><?php var_dump($woerter); ?></pre>