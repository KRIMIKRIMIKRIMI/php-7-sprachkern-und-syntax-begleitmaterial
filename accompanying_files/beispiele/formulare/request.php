<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Request</title>
</head>

<body>
    <h2>Link mit ID 1</h2>
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=1">absenden</a>
    <h2>Formular mit ID 2</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="id" value="2" />
        <input type="submit" value="absenden" />
    </form>
    <pre><?php var_dump($_REQUEST); ?></pre>
</body>

</html>