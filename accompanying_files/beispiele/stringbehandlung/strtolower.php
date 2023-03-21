<?php

$namen = [
    [
        'vorname' => 'Marco',
        'nachname' => 'Emrich',
    ],
    [
        'vorname' => 'Heiko',
        'nachname' => 'Marr',
    ],
    [
        'vorname' => 'Jan',
        'nachname' => 'Teriete',
    ],
];

$eingabe1 = 'heiko';
$eingabe2 = 'heiko ';
$eingabe3 = 'Heiko';

echo ' Ohne strtolower: ';

foreach ($namen as $name) {
    if ($eingabe1 == $name['vorname']) {
        echo 'Eingabe 1 gefunden! ';
    }
    if ($eingabe2 == $name['vorname']) {
        echo 'Eingabe 2 gefunden! ';
    }
    if ($eingabe3 == $name['vorname']) {
        echo 'Eingabe 3 gefunden! ';
    }
}

echo ' Mit strtolower: ';

foreach ($namen as $name) {
    if (strtolower(trim($eingabe1)) == strtolower($name['vorname'])) {
        echo 'Eingabe 1 gefunden! ';
    }
    if (strtolower(trim($eingabe2)) == strtolower($name['vorname'])) {
        echo 'Eingabe 2 gefunden! ';
    }
    if (strtolower(trim($eingabe3)) == strtolower($name['vorname'])) {
        echo 'Eingabe 3 gefunden! ';
    }
}
