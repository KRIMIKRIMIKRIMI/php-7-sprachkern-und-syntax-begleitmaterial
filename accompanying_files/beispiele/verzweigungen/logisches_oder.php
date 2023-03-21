<?php

$benutzer1Gruppe = 'benutzer';
$benutzer2Gruppe = 'verwalter';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Logisches Oder</title>
</head>

<body>
    <h1>Logisches Oder</h1>
    <p>
        Hier haben nur verwalter und admins Zugang:<br />
        Benutzer 1:
        <?php

        echo $benutzer1Gruppe === 'verwalter' ||
            $benutzer1Gruppe === 'admins';

        ?>
        <br />
        Benutzer 2:
        <?php

        echo $benutzer2Gruppe === 'verwalter' ||
            $benutzer2Gruppe === 'admins';

        ?>
    </p>
    <p>
        Es reicht hier, wenn der angemeldete Benutzer Mitglied der Gruppe
        benutzer, verwalter oder admins ist:<br />
        Benutzer 1:
        <?php

        echo $benutzer1Gruppe === 'benutzer' ||
            $benutzer1Gruppe === 'verwalter' ||
            $benutzer1Gruppe === 'admins';

        ?>
        <br />
        Benutzer 2:
        <?php

        echo $benutzer2Gruppe === 'benutzer' ||
            $benutzer2Gruppe === 'verwalter' ||
            $benutzer2Gruppe === 'admins';

        ?>
    </p>
</body>

</html>