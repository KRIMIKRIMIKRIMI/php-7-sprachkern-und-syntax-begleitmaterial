<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>URL-Parameter auslesen</title>
</head>

<body>
    Das Auto ist ein <?php echo $_GET['farbe']; ?>er
    <?php echo $_GET['hersteller']; ?> <?php echo $_GET['marke']; ?>
    mit <?php echo $_GET['kw']; ?> kW.
</body>

</html>