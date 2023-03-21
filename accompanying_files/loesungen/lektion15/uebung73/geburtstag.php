<?php

if ($_POST) {
    $timestamp = mktime(0, 0, 0, $_POST['monat'], $_POST['tag'], $_POST['jahr']);
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
    <?php } ?>
</body>

</html>