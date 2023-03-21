<?php

session_start();
$meldung = $_SESSION['meldung'] ?? '';
unset($_SESSION['meldung']);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Seite 2</title>
</head>

<body>
    <h1>Seite 2</h1>
    <p>Die Session wurde gestartet und eine Meldung ausgelesen.</p>
    <p>Die Meldung wurde danach aus der Session gelöscht.</p>
    <p>Da sie zuvor in einer Variablen abgelegt wurde,</p>
    <p>ist sie für den aktuellen Skriptdurchlauf weiterhin verfügbar.</p>
    <p>Sie lautet: &quot;<?php echo $meldung; ?>&quot;.</p>
    <p>Nach einem Browser-Reload wird jedoch keine Meldung mehr gefunden.</p>
</body>

</html>