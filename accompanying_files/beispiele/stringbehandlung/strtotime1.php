<?php

function ermittleTimestamp($datum, $uhrzeit)
{
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

    return $timestamp;
}

$datum = '17.04.2006';
$uhrzeit = '23:05:00';

echo strftime(
    '%Y-%m-%d %H:%M',
    ermittleTimestamp($datum, $uhrzeit)
);
