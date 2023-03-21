<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Eintrag</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <textarea name="text"></textarea>
        <br />
        <input type="submit" value="Absenden" />
    </form>

    <?php if ($_POST) { ?>
        <p>Sie haben folgenden Text eingegeben:</p>
        <p><?php echo nl2br($_POST['text']); ?></p>
    <?php } ?>
</body>

</html>