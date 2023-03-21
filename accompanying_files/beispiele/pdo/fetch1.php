<?php

$db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

$statement = $db->query('SELECT Host, User FROM user WHERE User = "root" AND Host = "localhost" LIMIT 1');
$daten = $statement->fetch();

?>
<pre><?php var_dump($daten); ?></pre>