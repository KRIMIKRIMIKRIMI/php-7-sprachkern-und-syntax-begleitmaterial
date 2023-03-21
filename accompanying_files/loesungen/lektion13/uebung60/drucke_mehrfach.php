<?php

function druckeMehrfach($string, $anzahl = 3)
{
    for ($i = 0; $i < $anzahl; $i++) {
        echo $string;
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Drucke</title>
</head>

<body>
    <p><?php druckeMehrfach('Hallo Welt '); ?></p>
    <p><?php druckeMehrfach('Nix ', 0); ?></p>
    <p><?php druckeMehrfach('Ganz viel ', 12); ?></p>
</body>

</html>