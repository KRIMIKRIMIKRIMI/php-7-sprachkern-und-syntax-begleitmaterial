<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Formular</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>
            <select name="staedte[]" id="staedte" multiple="multiple">
                <option value="1">Hamburg</option>
                <option value="2">Stuttgart</option>
                <option value="3">München</option>
                <option value="4">Dresden</option>
                <option value="5">Frankfurt</option>
            </select>
        </p>
        <input type="submit" value="absenden" />
    </form>
    <pre><?php var_dump($_POST); ?></pre>
</body>

</html>