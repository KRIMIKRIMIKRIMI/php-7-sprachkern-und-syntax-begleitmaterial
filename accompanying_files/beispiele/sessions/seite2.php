<?php

session_start();
$meldung = $_SESSION['meldung'];

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
    <p>Sie lautet: &quot;<?php echo $meldung; ?>&quot;.</p>
</body>

</html>