<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Hallo Welt</title>
</head>

<body>
    <?php

    echo '<form action="test.php" method="post">';
    echo '<input type="text" name="vorname" id="vorname" value="Arthur" />';
    echo '<input type="text" name="nachname" id="nachname" value="Dent" />';
    echo '<input type="submit" value="abschicken" />';
    echo '</form>';

    ?>
</body>

</html>