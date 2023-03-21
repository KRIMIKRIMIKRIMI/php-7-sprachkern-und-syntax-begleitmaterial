<?php

$datum = '17.04.2006';
$uhrzeit = '23:05:00';

$datumTeile = explode('.', $datum);
$uhrzeitTeile = explode(':', $uhrzeit);

$timestamp = mktime(
    $uhrzeitTeile[0],
    $uhrzeitTeile[1],
    $uhrzeitTeile[2],
    $datumTeile[1],
    $datumTeile[0],
    $datumTeile[2]
);

echo strftime('%Y-%m-%d %H:%M', $timestamp);
