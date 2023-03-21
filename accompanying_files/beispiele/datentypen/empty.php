<?php

$heuhaufen = 'Hallo';

// nicht enthalten
echo empty(strpos($heuhaufen, 'X')); // true

// Anfangsbuchstabe
echo empty(strpos($heuhaufen, 'H')); // true

// Buchstabe mitten im String
echo empty(strpos($heuhaufen, 'l')); // false
