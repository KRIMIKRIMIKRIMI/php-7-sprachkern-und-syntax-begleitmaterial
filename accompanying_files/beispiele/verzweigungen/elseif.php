<?php

$zahl = 8;

if ($zahl > 20) {
    echo 'Zahl ist größer als 20!';
} elseif ($zahl > 15) {
    echo 'Zahl ist zwischen 16 und 20!';
} elseif ($zahl > 10) {
    echo 'Zahl ist zwischen 11 und 15!';
} elseif ($zahl > 5) {
    echo 'Zahl ist zwischen 6 und 10!';
} elseif ($zahl > 0) {
    echo 'Zahl ist zwischen 1 und 5!';
} else {
    echo 'Zahl ist kleiner oder gleich 0!';
}
