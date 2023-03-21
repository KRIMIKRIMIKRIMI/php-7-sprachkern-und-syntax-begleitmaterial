<?php

$optionen = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$db = new PDO(
    'mysql:host=localhost;dbname=mysql',
    'root',
    '',
    $optionen
);

$statement = $db->query('SELECT Host, User FROM user WHERE User = "root" AND Host = "localhost" LIMIT 1');
$daten = $statement->fetch(PDO::FETCH_NUM);

?>
<pre><?php var_dump($daten); ?></pre>