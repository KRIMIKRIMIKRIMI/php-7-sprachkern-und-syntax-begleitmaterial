<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Alles groß!!!</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="text"  />
        <br />
        <input type="submit" value="Absenden" />
    </form>

    <?php if ($_POST) { ?>
        <p>Sie haben folgenden Text eingegeben:</p>
        <p><?php echo strtoupper($_POST['text']); ?></p>
    <?php } ?>
</body>

</html>