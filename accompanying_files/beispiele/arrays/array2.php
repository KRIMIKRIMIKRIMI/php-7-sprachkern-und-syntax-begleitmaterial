<?php

$werte = array(1, 2, 3, 4, 5, 6, 7, 8);

// der vorhandene Index 3 wird überschrieben
$werte[3] = 'vier';

// ein neuer Index (8) wird angehängt
$werte[] = 9;

echo $werte[8]; // gibt 9 aus
