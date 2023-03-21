<?php

require_once 'inc/datenbank.inc.php';

$sql = 'SELECT f.*, g.titel AS genre_titel FROM filme f' .
    ' LEFT JOIN genres g ON f.genre_id = g.id';

$statement = $db->query($sql);
$daten = $statement->fetchAll();

?>
<pre><?php var_dump($daten); ?></pre>