<?php

$db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

$statement = $db->query('SELECT Host, User FROM user');
$daten = $statement->fetchAll();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>PDO</title>
</head>

<body>

    <h1>MySQL-Benutzer</h1>
    <ul>
        <?php foreach ($daten as $benutzer): ?>
            <li>
                Host: <?= $benutzer['Host'] ?><br />
                User: <?= $benutzer['User'] ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>