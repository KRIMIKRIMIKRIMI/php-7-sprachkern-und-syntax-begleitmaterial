<?php

$namen = [
    'Arthur',
    'Marvin',
    'Ford',
    'Zaphod',
    'Trillian',
];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Charaktere aus "Per Anhalter durch die Galaxis"</title>
</head>

<body>
    <h1>Charaktere aus "Per Anhalter durch die Galaxis"</h1>
    <ul>
        <?php foreach ($namen as $name) { ?>
            <li><?php echo $name; ?></li>
        <?php } ?>
    </ul>
</body>

</html>