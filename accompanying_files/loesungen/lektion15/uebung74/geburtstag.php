<?php

if ($_POST) {
    $timestamp = mktime(0, 0, 0, $_POST['monat'], $_POST['tag'], $_POST['jahr']);

    $alterInSekunden = time() - $timestamp;

    // 365 Tage zu 24 Stunden zu 60 Minuten zu 60 Sekunden
    $alter = $alterInSekunden / 60 / 60 / 24 / 365;

    // durch das Abschneiden aller Nachkommastellen kann man abrunden
    $formatString = 'Sie sind momentan %d Jahre alt!';
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Geburtstag</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="tag">Tag: </label>
        <input type="text" name="tag" />
        <br />

        <label for="monat">Monat: </label>
        <input type="text" name="monat" />
        <br />

        <label for="jahr">Jahr: </label>
        <input type="text" name="jahr" />
        <br />

        <input type="submit" value="Absenden" />
    </form>
    <?php if (isset($timestamp)) { ?>
        <p>Ihr Geburtstag entspricht folgendem Unix-Timestamp:</p>
        <p><?php echo $timestamp; ?></p>
        <p><?php vprintf($formatString, [$alter]); ?></p>
    <?php } ?>
</body>

</html>