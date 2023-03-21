<?php

function summiere(...$zahlen)
{
    $summe = 0;
    foreach ($zahlen as $zahl) {
        $summe += $zahl;
    }
    
    return $summe;
}

echo summiere(); // 0
echo summiere(1); // 1
echo summiere(1, 2, 3); // 6
