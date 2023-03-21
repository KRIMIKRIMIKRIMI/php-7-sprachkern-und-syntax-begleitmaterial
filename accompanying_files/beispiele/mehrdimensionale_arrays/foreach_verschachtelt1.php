<?php

$zahlen = [
    [3, 5, 7, 12],
    [2, 78, 96, 117],
    [4, 45, 94, 101],
];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Verschachtelte foreach-Schleifen</title>
</head>

<body>
    <p>Zweidimensionales Array als HTML-Liste ausgeben:</p>

    <ul>
        <?php foreach ($zahlen as $index => $zeile) { ?>
            <li>
                Zeile: <?php echo $index + 1; ?>
                <ul>
                    <?php foreach ($zeile as $zahl) { ?>
                        <li><?php echo $zahl; ?></li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
    </ul>
</body>

</html>