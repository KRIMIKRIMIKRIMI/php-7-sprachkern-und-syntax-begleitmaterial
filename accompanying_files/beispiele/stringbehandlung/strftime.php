<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Zeitansage</title>
</head>

<body>
    <h1>Zeitansage</h1>
    <p>
        Heute ist der <?php echo strftime('%d.%m.%Y'); ?>.
    </p>
    <p>
        Beim nächsten Ton ist es
        <?php echo strftime('%H Uhr %M und %S Sekunden'); ?>.
    </p>
    <p>
        <strong>BEEEP</strong>
    </p>
</body>

</html>