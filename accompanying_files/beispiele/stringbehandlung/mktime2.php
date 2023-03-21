<?php

$datum = '17.04.2006';
$uhrzeit = '23:05:00';

[$tag, $monat, $jahr] = explode('.', $datum);
[$stunde, $minute, $sekunde] = explode(':', $uhrzeit);

$timestamp = mktime(
    $stunde,
    $minute,
    $sekunde,
    $monat,
    $tag,
    $jahr
);

echo strftime('%Y-%m-%d %H:%M', $timestamp);
