<?php

// wenn die Datei noch nicht existiert, wird eine Warnung angezeigt
$text = file_get_contents('datei.txt');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Der Text</title>
</head>

<body>
    <p><?php echo htmlspecialchars($text); ?></p>
</body>

</html>