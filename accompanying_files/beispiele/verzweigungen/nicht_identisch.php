<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Nicht identisch</title>
</head>

<body>
    <h1>Nicht identisch</h1>
    <p>
        Die Zahlen 1 und 1.0 sind nicht identisch:
        <?php echo 1 !== 1.0; ?>
    </p>
    <p>
        Die Zahl 1 und der String '1' sind nicht identisch:
        <?php echo 1 !== '1'; ?>
    </p>
</body>

</html>