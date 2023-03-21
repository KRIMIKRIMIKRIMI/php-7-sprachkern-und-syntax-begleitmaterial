<?php

$zahl = $_REQUEST['zahl'];
$ergebnis = $zahl > 0 ? 'positiv' : 'negativ';

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