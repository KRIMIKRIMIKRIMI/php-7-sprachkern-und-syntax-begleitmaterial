<?php

$db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

$statement = $db->query('SELECT Host, User FROM user');
$daten = $statement->fetchAll();

?>
<pre><?php var_dump($daten); ?></pre>