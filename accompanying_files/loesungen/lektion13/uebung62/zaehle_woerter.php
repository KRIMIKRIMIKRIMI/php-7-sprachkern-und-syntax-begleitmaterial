<?php

function zaehleWoerter($satz)
{
    return count(explode(' ', $satz));
}

$satz = 'Das ist ein kurzer Satz.';
$anzahl = zaehleWoerter($satz);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Zähle Wörter</title>
</head>

<body>
    <p>
        Der Satz "<?php echo $satz; ?>" besteht aus <?php echo $anzahl; ?> Wörtern.
    </p>
</body>

</html>