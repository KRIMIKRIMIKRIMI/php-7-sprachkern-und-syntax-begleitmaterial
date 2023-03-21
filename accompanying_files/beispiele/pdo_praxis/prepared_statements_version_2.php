<?php

require_once 'inc/datenbank.inc.php';

$daten = [
    'Top Gun',
    '1986-08-07',
    110,
    1,
];

$sql = 'INSERT INTO filme (titel, veroeffentlichung, dauer, genre_id) VALUES (?, ?, ?, ?)';

$statement = $db->prepare($sql);
$statement->execute($daten);
