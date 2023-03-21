<?php

function teileInWoerter($satz)
{
    return explode(' ', $satz);
}

$satz = 'Das ist ein kurzer Satz.';
$woerter = teileInWoerter($satz);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Teile Wörter</title>
</head>

<body>
    <p>
        Der Satz "<?php echo $satz; ?>" besteht aus den Wörtern: <?php echo implode(', ', $woerter); ?>
    </p>
</body>

</html>