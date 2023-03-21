<?php

$vorname = $_GET['vorname'];
$nachname = $_GET['nachname'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Hallo</title>
</head>

<body>
    <p>Hallo <?php echo $vorname; ?> <?php echo $nachname; ?>. Schön, dass Sie wieder da sind.</p>
</body>

</html>