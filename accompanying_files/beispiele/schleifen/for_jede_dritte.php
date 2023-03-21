<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Wir zählen jede dritte Zahl</title>
</head>

<body>
    <h1>Wir zählen jede dritte Zahl</h1>
    <?php for ($i = 1; $i <= 20; $i += 3) { ?>
        <p><?php echo $i; ?> ...</p>
    <?php } ?>
</body>

</html>