<?php

$benutzerEingabe = '
    <h2>Überschriften H2 sind erlaubt</h2>
    <p>P-Tags sind erlaubt</p>
    <a href="http://www.google.de">Links nicht</a>';

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
    <?php echo strip_tags($benutzerEingabe, '<p><h2>'); ?>
</body>

</html>