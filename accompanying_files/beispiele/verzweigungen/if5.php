<?php

$zahl = $_REQUEST['zahl'];
if ($zahl > 0) {
    $ergebnis = 'positiv';
} else {
    $ergebnis = 'negativ';
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Zahl</title>
</head>

<body>
    <h1>Zahl</h1>
    <p>
        Sie haben eine <?php echo $ergebnis; ?>e Zahl übergeben.
    </p>
</body>

</html>