<?php

$personen = ['Thorsten', 'Marco', 'Frank'];
$daten = serialize($personen);
file_put_contents('personen.txt', $daten);
