<?php

$nichts = null;
$string1 = 'Hallo';
$string2 = '';
$string3 = '0';
$boolean1 = true;
$boolean2 = false;
$integer1 = 0;
$integer2 = 1;
$integer3 = -1;

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>isset() gegen empty()</title>
</head>

<body>
    <p>
        Eine Variable, die nicht existiert, erzeugt bei isset() false:
        <?php echo isset($garNichts); ?><br />

        Eine Variable, die nicht existiert, erzeugt bei empty() true:
        <?php echo empty($garNichts); ?><br />

        Eine Variable, die null enthält, erzeugt bei isset() false:
        <?php echo isset($nichts); ?><br />

        Eine Variable, die null enthält, erzeugt bei empty() true:
        <?php echo empty($nichts); ?><br />

        Also verhalten sich Variablen, die null enthalten, genauso wie die, die gar nicht existieren!
    </p>
    <p>
        Eine Variable, die einen String enthält, erzeugt bei isset() true:
        <?php echo isset($string1); ?><br />

        Eine Variable, die einen String enthält, erzeugt bei empty() false:
        <?php echo empty($string1); ?><br />

        Eine Variable, die einen leeren String enthält, erzeugt bei isset() true:
        <?php echo isset($string2); ?><br />

        Eine Variable, die einen leeren String enthält, erzeugt bei empty() true:
        <?php echo empty($string2); ?><br />

        Eine Variable, die den String '0' enthält, erzeugt bei isset() true:
        <?php echo isset($string3); ?><br />

        Eine Variable, die  den String '0' enthält, erzeugt bei empty() true:
        <?php echo empty($string3); ?><br />

        Ein leerer String gilt also für empty() als true, genauso wie ein
        String, der nur '0' (die Zahl 0) enthält!
    </p>
    <p>
        Eine Variable, die den booleschen Wert true enthält, erzeugt bei isset() true:
        <?php echo isset($boolean1); ?><br />

        Eine Variable, die den booleschen Wert true enthält, erzeugt bei empty() false:
        <?php echo empty($boolean1); ?><br />

        Eine Variable, die den booleschen Wert false enthält, erzeugt bei isset() true:
        <?php echo isset($boolean2); ?><br />

        Eine Variable, die den booleschen Wert false enthält, erzeugt bei empty() true:
        <?php echo empty($boolean2); ?><br />

        Der boolesche Wert false zählt also als empty()!
    </p>
    <p>
        Eine Variable, die die Zahl 0 enthält, erzeugt bei isset() true:
        <?php echo isset($integer1); ?><br />

        Eine Variable, die die Zahl 0 enthält, erzeugt bei empty() true:
        <?php echo empty($integer1); ?><br />

        Eine Variable, die die Zahl 1 enthält, erzeugt bei isset() true:
        <?php echo isset($integer2); ?><br />

        Eine Variable, die die Zahl 1 enthält, erzeugt bei empty() false:
        <?php echo empty($integer2); ?><br />

        Eine Variable, die die Zahl -1 enthält, erzeugt bei isset() true:
        <?php echo isset($integer3); ?><br />

        Eine Variable, die die Zahl -1 enthält, erzeugt bei empty() false:
        <?php echo empty($integer3); ?><br />

        Die Zahl 0 zählt also als empty(), alle anderen Zahlen sind nicht leer!
    </p>
</body>

</html>