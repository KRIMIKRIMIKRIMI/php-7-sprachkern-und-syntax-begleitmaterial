<?php

require_once 'inc/datenbank.inc.php';

$sql = 'INSERT INTO genres (titel) VALUES ("Drama")';

$db->query($sql);

?>
Die zuletzt erzeugte ID ist: <?= $db->lastInsertId() ?>