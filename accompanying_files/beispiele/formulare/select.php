<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Formular</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>
            <select name="stadt" id="stadt">
                <option>Hamburg</option>
                <option>Stuttgart</option>
                <option>München</option>
                <option>Dresden</option>
                <option>Frankfurt</option>
            </select>
        </p>
        <input type="submit" value="absenden" />
    </form>
    <pre><?php var_dump($_POST); ?></pre>
</body>

</html>