<?php

$laenge = strlen($_POST['passwort']);

// der erste Fall wird in der äußeren if-Anweisung getestet
if ($laenge < 6) {
    $nachricht = 'Passwort ist zu kurz!';
} else {
    // die beiden anderen werden in einem verschachtelten if-else behandelt
    if ($laenge > 10) {
        $nachricht = 'Passwort ist zu lang!';
    } else {
        $nachricht = 'Passwort ist OK!';
    }
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