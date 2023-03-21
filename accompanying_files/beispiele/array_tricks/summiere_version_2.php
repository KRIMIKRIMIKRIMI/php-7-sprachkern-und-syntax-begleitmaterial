<?php

function summiere(...$zahlen)
{
    return array_sum($zahlen);
}

echo summiere(); // 0
echo summiere(1); // 1
echo summiere(1, 2, 3); // 6
