<?php

$optionen = [
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
];

$db = new PDO(
    'mysql:host=localhost;dbname=mysql',
    'root',
    '',
    $optionen
);

$statement = $db->query('SELECT Host, User FROM user');
$daten = $statement->fetchAll();

// Sobald alle Datensätze mit fetch/fetchAll ausgelesen sind, wird das
// PDOStatement-Objekt nicht länger benötigt und kann weggeräumt werden.
unset($statement);

?>
<pre><?php var_dump($daten); ?></pre>