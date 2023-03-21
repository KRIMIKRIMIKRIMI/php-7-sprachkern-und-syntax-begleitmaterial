<?php

function ermittleTimestamp($datum, $uhrzeit)
{
    return strtotime($datum . ' ' . $uhrzeit);
}

$datum = '17.04.2006';
$uhrzeit = '23:05:00';

echo strftime(
    '%Y-%m-%d %H:%M',
    ermittleTimestamp($datum, $uhrzeit)
);
