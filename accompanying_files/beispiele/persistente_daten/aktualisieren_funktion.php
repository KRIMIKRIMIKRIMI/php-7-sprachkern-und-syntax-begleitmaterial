<?php

function speicherePerson($person)
{
    $personen = unserialize(file_get_contents('personen.txt'));
    $personen[] = $person;
    file_put_contents('personen.txt', serialize($personen));
}

$neuePerson = 'Heiko';
speicherePerson($neuePerson);
