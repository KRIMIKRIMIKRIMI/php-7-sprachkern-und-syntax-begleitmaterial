<?php

$db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

$statement = $db->query('SELECT Host, User FROM user');

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
        <?php while ($benutzer = $statement->fetch()): ?>
            <li>
                Host: <?= $benutzer['Host'] ?><br />
                User: <?= $benutzer['User'] ?>
            </li>
        <?php endwhile; ?>
    </ul>

</body>

</html>