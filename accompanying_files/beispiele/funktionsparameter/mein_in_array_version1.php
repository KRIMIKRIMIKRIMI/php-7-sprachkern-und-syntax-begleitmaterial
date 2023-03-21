<?php

function pruefeImArray($nadel, $heuhaufen, $identisch = false)
{
    if ($identisch) {
        foreach ($heuhaufen as $element) {
            if ($nadel === $element) {
                echo 'Element ' . $element .  ' gefunden!!!';
            }
        }
    } else {
        foreach ($heuhaufen as $element) {
            if ($nadel == $element) {
                echo 'Element ' . $element .  ' gefunden!!!';
            }
        }
    }
}

$zahlen = [4, 6, 7, 42, 78, 96];

pruefeImArray(4, $zahlen); // gleich
pruefeImArray('4', $zahlen); // gleich
pruefeImArray('4', $zahlen, true); // nicht identisch
