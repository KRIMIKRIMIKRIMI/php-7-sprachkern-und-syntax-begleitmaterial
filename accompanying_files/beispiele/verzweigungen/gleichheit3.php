<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Der Gleichheitsoperator</title>
</head>

<body>
    <h1>Der Gleichheitsoperator</h1>
    <p>
        Eine Integerzahl und eine Fließkommazahl sind
        niemals identisch (===):
        <?php echo 1 === 1.0; ?><br />
        aber sie sind gleich (==):
        <?php echo 1 == 1.0; ?>
    </p>
    <p>
        Eine Zahl ist niemals mit einem String identisch,
        der dieselbe Zahl enthält (===):
        <?php echo 1 === '1'; ?><br />
        aber sie sind gleich (==):
        <?php echo 1 == '1'; ?>
    </p>
</body>

</html>