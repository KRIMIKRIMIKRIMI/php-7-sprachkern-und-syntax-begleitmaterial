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
            <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
        </li>
        <li>
            Sie haben diese Seite über "<?php echo strtolower($_SERVER['REQUEST_METHOD']); ?>" aufgerufen.
        </li>
        <li>
            Sie verstehen folgende Sprachen:
            <?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?>
        </li>
        <li>
            <?php

            $sprachen = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);

            ?>
            Ihre Lieblingssprache ist: <?php echo $sprachen[0]; ?>
        </li>
        <li>
            <?php

            $server = explode(' ', $_SERVER['SERVER_SOFTWARE']);

            ?>
            Die Server-Version ist: <?php echo $server[0]; ?>
        </li>
    </ul>
</body>

</html>