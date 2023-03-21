<?php

$laenge = isset($_POST['passwort']) ? strlen($_POST['passwort']) : null;

if (!$_POST) {
    $nachricht = '';
} elseif ($laenge < 6) {
    $nachricht = 'Passwort ist zu kurz!';
} elseif ($laenge > 10) {
    $nachricht = 'Passwort ist zu lang!';
} else {
    $nachricht = 'Passwort ist OK!';
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Passwortvalidierung</title>
</head>

<body>
    <h1>Passwortvalidierung</h1>
    <p><?php echo $nachricht; ?></p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Bitte geben Sie ein Passwort zwischen 6 und 10 Zeichen Länge ein:
        <input type="password" name="passwort" />
        <br />
        <input type="submit" value="absenden" />
    </form>
</body>

</html>