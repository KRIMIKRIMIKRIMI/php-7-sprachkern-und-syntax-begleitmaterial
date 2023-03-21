<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Wir zählen</title>
</head>

<body>
    <h1>Wir zählen</h1>
    <ul>
        <?php for ($i = 1; $i <= 20; $i++) { ?>
            <li>
                Das war Versuch Nummer
                <?php echo $i; ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>