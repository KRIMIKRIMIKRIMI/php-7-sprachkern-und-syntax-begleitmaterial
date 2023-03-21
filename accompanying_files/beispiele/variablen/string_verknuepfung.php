<?php

echo 'Hallo ' . 'Welt';

$vorname = 'Rasmus';
$nachname = 'Lerdorf';

// hier fehlt das Leerzeichen
echo $vorname . $nachname;

// so ist es besser
echo $vorname . ' ' . $nachname;

// der volle Name wird zuerst in einer Variablen gespeichert
$name = $vorname . ' ' . $nachname;
echo $name;
