<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Der Gleichheitsoperator</title>
</head>

<body>
    <h1>Der Gleichheitsoperator</h1>
    <p>
        Eine Zahl ist gleich einem String, der mit der Zahl beginnt:
        <?php echo 12 == '12 Grad hat es heute.'; ?>
    </p>
    <p>
        Eine Zahl ungleich 0 ist immer gleich true:
        <?php echo 12 == true; ?>
    </p>
    <p>
        Die Zahl 0 ist immer gleich false:
        <?php echo 0 == false; ?>
    </p>
    <p>
        Der String 'false' (ein nicht leerer String) ist true:
        <?php echo 'false' == true; ?>
    </p>
</body>

</html>