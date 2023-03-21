<?php

require_once 'inc/datenbank.inc.php';

$db->query(
    'CREATE TABLE filme (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        titel VARCHAR(255),
        veroeffentlichung DATE,
        dauer INT(5)
    ) DEFAULT CHARSET = utf8'
);
