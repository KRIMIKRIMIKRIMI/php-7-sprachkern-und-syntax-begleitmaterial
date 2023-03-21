<?php

$werte[] = 1;
$werte[] = 2;
$werte[] = 3;
$werte[] = 4;

// der Wert im Index 2 (die Zahl 3) wird nun überschrieben
$werte[2] = 'drei';

// ein neuer Index (Nummer 4) wird angelegt
$werte[] = 5;

// ein neuer Index (Nummer 8) wird explizit angelegt
$werte[8] = 9;

// ein neuer Index (Nummer 9) wird angelegt
$werte[] = 10;

// gibt 10 aus
echo $werte[9];
