<?php

// eine beliebige Ganzzahl
$zahl1 = 123456789;
// die größte Ganzzahl (auf 32-Bit-Systemen)
$zahl2 = 2147483647;
// diese hier wird zu double umgewandelt
$zahl3 = 2147483648;
// die kleinste Ganzzahl (auf 32-Bit-Systemen)
$zahl4 = -2147483647;
// diese hier wird zu double umgewandelt
$zahl5 = -2147483648;

echo gettype($zahl1) . ', ';
echo gettype($zahl2) . ', ';
echo gettype($zahl3) . ', ';
echo gettype($zahl4) . ', ';
echo gettype($zahl5) . '.';
