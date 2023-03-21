<?php

$gespeicherterBenutzername = 'admin';
$benutzerEingabe = 'admin  ';

if ($gespeicherterBenutzername == $benutzerEingabe) {
    echo 'Alles OK';
}

if ($gespeicherterBenutzername == trim($benutzerEingabe)) {
    echo 'Jetzt ist alles OK';
}
