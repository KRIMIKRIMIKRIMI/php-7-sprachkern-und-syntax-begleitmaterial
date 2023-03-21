<?php

$daten = file_get_contents('personen.txt');
$personen = unserialize($daten);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Personen</title>
</head>

<body>
    <h1>Personen</h1>
    <ul>
        <?php foreach ($personen as $p) { ?>
            <li><?php echo $p; ?></li>
        <?php } ?>
    </ul>
</body>

</html>