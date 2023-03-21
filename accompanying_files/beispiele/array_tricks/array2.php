<?php

$zeitpunkt = [23, 59, 0, 12, 31, 2008];

$timestamp = mktime(...$zeitpunkt);

echo $timestamp;
