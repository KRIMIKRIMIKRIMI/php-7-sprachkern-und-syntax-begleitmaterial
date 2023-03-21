<?php

$optionen = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

$db = new PDO(
    'mysql:host=localhost;dbname=mysql',
    'root',
    '',
    $optionen
);

$db->query('SELECT * FROM duser'); // falscher Tabellenname
