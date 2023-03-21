<?php

require_once 'inc/datenbank.inc.php';

$sql = 'INSERT INTO genres (titel) VALUES ("Action")';

$db->query($sql);
