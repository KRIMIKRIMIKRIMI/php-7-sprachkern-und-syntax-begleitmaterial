<?php

function multipliziereZweiZahlen($zahl1, $zahl2)
{
    return $zahl1 * $zahl2;
}

$ergebnis1 = multipliziereZweiZahlen(5, 3);
echo 'Ergebnis 1: ' . $ergebnis1 . '! ';

echo 'Ergebnis 2: ' . multipliziereZweiZahlen(2, 12) . '! ';
