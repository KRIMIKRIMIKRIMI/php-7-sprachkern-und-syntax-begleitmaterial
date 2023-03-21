<?php

function pruefeImArray($nadel, $heuhaufen)
{
    foreach ($heuhaufen as $element) {
        if ($nadel === $element) {
            echo 'Element ' . $element .  ' gefunden!!!';
        }
    }
}

$zahlen = [4, 6, 7, 42, 78, 96];

pruefeImArray(4, $zahlen);
pruefeImArray(55, $zahlen);

// falsche Parameter-Reihenfolge!!!
pruefeImArray($zahlen, 67);
