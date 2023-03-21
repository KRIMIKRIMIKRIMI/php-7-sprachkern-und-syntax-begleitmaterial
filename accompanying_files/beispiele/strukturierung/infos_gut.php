<?php

$browser = $_SERVER['HTTP_USER_AGENT'];
$methode = strtolower($_SERVER['REQUEST_METHOD']);
$sprachen = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

$sprachenZerlegt = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
$bevorzugteSprache = $sprachenZerlegt[0];

$serverZerlegt = explode(' ', $_SERVER['SERVER_SOFTWARE']);
$serverVersion = $serverZerlegt[0];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Systeminfos</title>
</head>

<body>
    <h1>Systeminformationen</h1>
    <p>Folgende Informationen haben wir über Sie gesammelt:</p>
    <ul>
        <li>
            Ihr Browser ist:
            <?php echo $browser; ?>
        </li>
        <li>
            Sie haben diese Seite über "<?php echo $methode; ?>" aufgerufen.
        </li>
        <li>
            Sie verstehen folgende Sprachen:
            <?php echo $sprachen; ?>
        </li>
        <li>
            Ihre Lieblingssprache ist:
            <?php echo $bevorzugteSprache; ?>
        </li>
        <li>
            Die Server-Version ist:
            <?php echo $serverVersion; ?>
        </li>
    </ul>
</body>

</html>