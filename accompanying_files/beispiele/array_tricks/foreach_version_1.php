<?php

function holeDaten()
{
    return [
        ['Der Graf von Monte Christo', 9.95],
        ['Per Anhalter durch die Galaxis', 7.95]
    ];
}

$daten = holeDaten();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>foreach-Schleife ohne Destructuring</title>
</head>

<body>
    <ul>
        <?php foreach ($daten as $buch): ?>
            <li>
                <?= $buch[0] ?><br />
                <?= $buch[1] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>