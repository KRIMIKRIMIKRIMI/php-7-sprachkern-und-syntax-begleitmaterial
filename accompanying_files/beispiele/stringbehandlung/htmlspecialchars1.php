<?php

$benutzerEingabe = '
    <script type="text/javascript">
        document.body.innerHTML = "Diese Seite gehört jetzt mir!";
    </script>';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Gefahren!</title>
</head>

<body>
    <p>
        Vielen Dank für Ihre Eingabe.
    </p>
    <?php echo htmlspecialchars($benutzerEingabe); ?>
</body>

</html>