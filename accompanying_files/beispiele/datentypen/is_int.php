<?php

$var1 = 4;
$var2 = 4.5;
$var3 = '4';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>is_int()</title>
</head>

<body>
    Eine Ganzzahl erzeugt bei is_int() true:
    <?php echo is_int($var1); ?><br />

    Eine Fließkommazahl erzeugt bei is_int() false:
    <?php echo is_int($var2); ?><br />

    Ein String, der eine Zahl enthält, erzeugt bei is_int() false:
    <?php echo is_int($var3); ?><br />
</body>

</html>