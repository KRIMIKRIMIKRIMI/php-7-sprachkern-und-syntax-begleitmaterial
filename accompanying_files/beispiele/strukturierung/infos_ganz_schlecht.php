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
        <?php

        echo '<li>Ihr Browser ist: ' . $_SERVER['HTTP_USER_AGENT'] . '</li>';
        echo '<li>Sie haben diese Seite über "' . strtolower($_SERVER['REQUEST_METHOD']) . '" aufgerufen.</li>';
        echo '<li>Sie verstehen folgende Sprachen: '. $_SERVER['HTTP_ACCEPT_LANGUAGE'] . '</li>';
        $sprachen = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
        echo '<li>Ihre Lieblingssprache ist: ' . $sprachen[0] . '</li>';
        $server = explode(' ', $_SERVER['SERVER_SOFTWARE']);
        echo '<li>Die Server-Version ist: ' . $server[0] . '</li>';

        ?>
    </ul>
</body>

</html>