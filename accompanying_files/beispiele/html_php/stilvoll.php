<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Hallo Welt</title>
</head>

<body>
    <form action="test.php" method="post">
        <input type="text" name="vorname" id="vorname" value="<?php echo 'Arthur'; ?>" />
        <input type="text" name="nachname" id="nachname" value="<?php echo 'Dent'; ?>" />
        <input type="submit" value="abschicken" />
    </form>
</body>

</html>