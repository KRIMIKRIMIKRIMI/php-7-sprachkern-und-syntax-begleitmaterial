<?php

function formatiereErstenBuchstabenKlein($original)
{
    return strtolower(substr($original, 0, 1)) . substr($original, 1);
}

echo formatiereErstenBuchstabenKlein('Hallo Welt');
