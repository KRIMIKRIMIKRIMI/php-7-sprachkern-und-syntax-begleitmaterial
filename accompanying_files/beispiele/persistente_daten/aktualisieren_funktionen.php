<?php

function holePersonen()
{
    return unserialize(file_get_contents('personen.txt'));
}

function speicherePerson($person)
{
    $personen = holePersonen();
    $personen[] = $person;
    file_put_contents('personen.txt', serialize($personen));
}

$neuePerson = 'Christin';
speicherePerson($neuePerson);
