<?php

function pruefeImArray($nadel, $heuhaufen, $identisch = false)
{
    $test = false;

    if ($identisch) {
        foreach ($heuhaufen as $element) {
            if ($nadel === $element) {
                $test = true;
            }
        }
    } else {
        foreach ($heuhaufen as $element) {
            if ($nadel == $element) {
                $test = true;
            }
        }
    }

    return $test;
}

$zahlen = [4, 6, 7, 42, 78, 96];

echo pruefeImArray(4, $zahlen); // es wird 1 (true) ausgegeben

if (pruefeImArray(4, $zahlen)) {
    echo 'Gefunden!'; // wird ausgegeben
}

if (pruefeImArray(35, $zahlen)) {
    echo 'Gefunden!'; // wird nicht ausgegeben
}
