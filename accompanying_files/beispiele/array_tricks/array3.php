<?php

$zeitpunkt = [12, 31, 2008];

$timestamp = mktime(23, 59, 0, ...$zeitpunkt);

echo $timestamp;
