<?php

function formatiereErstenBuchstabenKlein($original)
{
    $erstesZeichen = substr($original, 0, 1);
    $stringRest = substr($original, 1);

    $erstesZeichenKlein = strtolower($erstesZeichen);

    return $erstesZeichenKlein . $stringRest;
}

echo formatiereErstenBuchstabenKlein('Hallo Welt');
