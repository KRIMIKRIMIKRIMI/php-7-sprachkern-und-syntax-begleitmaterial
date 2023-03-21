<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Wir zählen rückwärts</title>
</head>

<body>
    <h1>Wir zählen rückwärts</h1>
    <?php for ($i = 10; $i >= 0; $i--) { ?>
        <p><?php echo $i; ?> ...</p>
    <?php } ?>
    <p>BUMMM!!!</p>
</body>

</html>