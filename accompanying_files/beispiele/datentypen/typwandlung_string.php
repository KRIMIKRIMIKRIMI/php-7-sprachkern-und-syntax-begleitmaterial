<?php

$string1 = 4 . 7;
$string2 = 3.5 . 7.9;
$string3 = 35 . ' ist kleiner als ' . 42;

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Dynamische Typwandlung - strings</title>
</head>

<body>
    Die Zahl 4 mit der Zahl 7 verknüpft, ergibt nicht etwa 11 sondern:
    <strong><?php echo $string1; ?></strong><br />

    Die beiden Zahlenwerte werden in Strings umgewandelt und einfach
    aneinandergehängt. Das ergibt manchmal recht ungewöhnliche Ergebnisse:
    <strong><?php echo $string2; ?></strong><br />

    Wenn eine Zahl mit einem String verknüpft wird, werden beide einfach
    aneinandergehängt. Vergessen Sie nicht die Leerzeichen:
    <strong><?php echo $string3; ?></strong><br />
</body>

</html>