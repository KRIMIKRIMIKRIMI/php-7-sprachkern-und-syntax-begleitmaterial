<?php

require_once 'inc/datenbank.inc.php';

$db->query(
    'CREATE TABLE genres (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        titel VARCHAR(255)
    ) DEFAULT CHARSET = utf8'
);
