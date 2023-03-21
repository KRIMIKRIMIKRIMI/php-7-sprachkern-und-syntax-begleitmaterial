<?php

$text = 'Dieser Text gehört Bob, Bob und nur Bob!
    Niemand außer Bob darf diesen Text besitzen!
    Wenn es jemand außer Bob wagen sollte, diesen
    Text besitzen zu wollen, wird diese Person von
    Bob schreckliche Konzequenzen zu befürchten haben!';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Text ersetzen</title>
</head>

<body>
    <p>
        <?php echo str_replace('Bob', 'Homer', $text); ?>
    </p>
</body>

</html>