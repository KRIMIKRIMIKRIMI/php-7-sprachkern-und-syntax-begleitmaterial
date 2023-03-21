<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Wir zählen jede Zahl, die durch 5 und 7 ganz teilbar ist</title>
</head>

<body>
    <h1>Wir zählen jede Zahl, die durch 5 und 7 ganz teilbar ist</h1>
    <?php for ($i = 1; $i <= 100; $i++) { ?>
        <?php if (($i % 5 === 0) && ($i % 7 === 0)) { ?>
            <p>
                Die Zahl <?php echo $i; ?> ist durch 5 und 7 teilbar.
            </p>
        <?php } ?>
    <?php } ?>
</body>

</html>