<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Formular</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>
            <input type="checkbox" name="frucht" value="Kirsche" />
            Kirsche
            <input type="checkbox" name="frucht" value="Banane" />
            Banane
            <input type="checkbox" name="frucht" value="Apfel" />
            Apfel
            <input type="checkbox" name="frucht" value="Orange" />
            Orange
        </p>
        <input type="submit" value="absenden" />
    </form>
    <pre><?php var_dump($_POST); ?></pre>
</body>

</html>