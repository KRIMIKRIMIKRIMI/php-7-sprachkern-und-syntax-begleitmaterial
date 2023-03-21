<?php

$werte = [1, 2, 3, 4];

$werte[] = 5;
$werte[] = 10;

$indizes = array_keys($werte);

// gibt den höchsten Index (hier 5) aus
echo array_pop($indizes);
