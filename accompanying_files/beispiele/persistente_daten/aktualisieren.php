<?php

$neuePerson = 'Christian';

$personen = unserialize(file_get_contents('personen.txt'));
$personen[] = $neuePerson;
file_put_contents('personen.txt', serialize($personen));
