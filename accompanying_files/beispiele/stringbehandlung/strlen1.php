<?php

function testePasswortLaenge($passwort)
{
    if ((strlen($passwort) >= 7) && (strlen($passwort) <= 12)) {
        $status = true;
    } else {
        $status = false;
    }

    return $status;
}

$passwort1 = 'langepasswoertersindsichereraberhierzulang';
$passwort2 = 'genaurichtig';
$passwort3 = 'zukurz';

if (testePasswortLaenge($passwort1)) {
    echo 'Passwort 1 ok!';
}

if (testePasswortLaenge($passwort2)) {
    echo 'Passwort 2 ok!';
}

if (testePasswortLaenge($passwort3)) {
    echo 'Passwort 3 ok!';
}
