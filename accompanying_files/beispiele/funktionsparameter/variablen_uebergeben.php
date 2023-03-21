<?php

function sageName($name)
{
    echo 'Hallo ' . $name . '! ';
    echo 'Die Variable $vorname ist hier nicht sichtbar: ' . $vorname;
}

$vorname = 'Arthur';
sageName($vorname);
