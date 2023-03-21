<?php

$benutzerEingabe = '<p style="color: #ff0000;">Das hier ist rot!</p>';

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
    <?php echo strip_tags($benutzerEingabe); ?>
</body>

</html>