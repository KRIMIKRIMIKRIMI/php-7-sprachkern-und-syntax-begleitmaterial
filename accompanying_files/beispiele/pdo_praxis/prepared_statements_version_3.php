<?php

require_once 'inc/datenbank.inc.php';

$daten = [
    'titel' => 'Top Gun',
    'veroeffentlichung' => '1986-08-07',
    'dauer' => 110,
    'genre' => 1,
];

$sql = 'INSERT INTO filme (titel, veroeffentlichung, dauer, genre_id) VALUES (:titel, :veroeffentlichung, :dauer, :genre)';

$statement = $db->prepare($sql);
$statement->execute($daten);
