<?php

[$bevorzugteSprache,] = explode(
    ',',
    $_SERVER['HTTP_ACCEPT_LANGUAGE'],
    2
);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>$_SERVER</title>
</head>

<body>
    <?php if (strpos($bevorzugteSprache, 'de') !== false) { ?>
        <p>Willkommen auf unserer tollen Seite.</p>
    <?php } else { ?>
        <p>Welcome to our great homepage.</p>
    <?php } ?>
</body>

</html>