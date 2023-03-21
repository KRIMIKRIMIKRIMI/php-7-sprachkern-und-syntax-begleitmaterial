<?php

require_once 'inc/datenbank.inc.php';

// falls die Tabellen schon existieren, wegräumen
$db->query('DROP TABLE IF EXISTS genres');
$db->query('DROP TABLE IF EXISTS filme');

$db->query(
    'CREATE TABLE genres (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        titel VARCHAR(255) UNIQUE KEY
    ) DEFAULT CHARSET = utf8'
);

$db->query(
    'CREATE TABLE filme (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        titel VARCHAR(255),
        veroeffentlichung DATE,
        dauer INT(5),
        genre_id INTEGER
    ) DEFAULT CHARSET = utf8'
);
