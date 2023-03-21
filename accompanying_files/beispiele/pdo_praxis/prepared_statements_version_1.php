<?php

require_once 'inc/datenbank.inc.php';

$titel = 'Top Gun';
$veroeffentlichung = '1986-08-07';
$dauer = 110;
$genre = 1;

$sql = 'INSERT INTO filme (titel, veroeffentlichung, dauer, genre_id) VALUES ("' . $titel . '", "' . $veroeffentlichung . '", ' . $dauer . ', '. $genre . ')';

$db->query($sql);
