<?php

$benutzerGruppe = 'benutzer';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Logische Verneinung</title>
</head>

<body>
    <h1>Logische Verneinung</h1>
    <p>
        Anstatt wie vorher zu testen, ob der Benutzer in einer der drei Gruppen ist, <br />
        Benutzer 1:
        <?php

        echo $benutzerGruppe === 'benutzer' ||
            $benutzerGruppe === 'verwalter' ||
            $benutzerGruppe === 'admins';

        ?>
    </p>
    <p>
        können wir testen, ob er NICHT in der vierten Gruppe (anonym) ist, <br />
        Benutzer 1:
        <?php echo !($benutzerGruppe === 'anonym'); ?>
    </p>
    <p>
        Oder Sie verwenden hier das schon bekannte NICHT identisch.<br />
        Benutzer 1:
        <?php echo $benutzerGruppe !== 'anonym'; ?>
    </p>

</body>

</html>