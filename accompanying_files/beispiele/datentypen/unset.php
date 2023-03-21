<?php

$vorname = 'Arthur';
echo isset($vorname); // Ausgabe 1 da true

// löscht die Variable
unset($vorname);
echo isset($vorname); // keine Ausgabe da false

echo $vorname;
