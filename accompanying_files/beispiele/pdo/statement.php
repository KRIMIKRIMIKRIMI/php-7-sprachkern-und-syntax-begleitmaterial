<?php

$db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

$statement = $db->query('SELECT * FROM user');

?>
<pre><?php var_dump($statement); ?></pre>