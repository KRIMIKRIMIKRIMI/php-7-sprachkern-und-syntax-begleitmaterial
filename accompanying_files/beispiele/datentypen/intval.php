<?php

$var1 = '10 ist kleiner als 12!';
$var2 = 'Die Zahl 15 ist aber noch größer!';
$var3 = '500';
$var4 = 123;
$var5 = 123.45;
$var6 = true;
$var7 = false;

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>intval()</title>
</head>

<body>
    Eine Variable mit dem Inhalt "<?php echo $var1; ?>" wird zu:
    <?php echo intval($var1); ?><br />

    Eine Variable mit dem Inhalt "<?php echo $var2; ?>" wird zu:
    <?php echo intval($var2); ?><br />

    Eine Variable mit dem Inhalt "<?php echo $var3; ?>" wird zu:
    <?php echo intval($var3); ?><br />

    Eine Variable mit dem Inhalt <?php echo $var4; ?> wird zu:
    <?php echo intval($var4); ?><br />

    Eine Variable mit dem Inhalt <?php echo $var5; ?> wird zu:
    <?php echo intval($var5); ?><br />

    Eine Variable mit dem Inhalt true wird zu:
    <?php echo intval($var6); ?><br />

    Eine Variable mit dem Inhalt false wird zu:
    <?php echo intval($var7); ?><br />
</body>

</html>