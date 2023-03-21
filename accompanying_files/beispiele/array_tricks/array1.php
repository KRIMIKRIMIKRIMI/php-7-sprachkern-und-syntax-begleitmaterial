<?php

$zeitpunkt = [23, 59, 0, 12, 31, 2008];

[$stunde, $minute, $sekunde, $monat, $tag, $jahr] = $zeitpunkt;
$timestamp = mktime($stunde, $minute, $sekunde, $monat, $tag, $jahr);

echo $timestamp;
