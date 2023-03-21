<?php

$test1 = 'hallo';
$test2 = 'Hallo';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Der Identitätsoperator</title>
</head>

<body>
    <h1>Der Identitätsoperator</h1>
    <p>
        Wenn zwei Strings den gleichen Inhalt haben, wird true erzeugt:
        <?php echo 'hallo' === 'hallo'; ?>
    </p>
    <p>
        Es wird natürlich zwischen Groß- und Kleinschreibung unterschieden:
        <?php echo 'hallo' === 'Hallo'; ?>
    </p>
    <p>
        Auch Leerzeichen werden beachtet:
        <?php echo 'hallo' === 'hallo '; ?>
    </p>
    <p>
        Einer der beiden Testkandidaten kann eine Variable sein:
        <?php echo $test1 === 'hallo'; ?>
    </p>
    <p>
        Oder auch beide:
        <?php echo $test1 === $test2; ?>
    </p>
    <p>
        Integer-Zahlen sind entweder identisch:
        <?php echo 1 === 1; ?>
    </p>
    <p>
        oder nicht:
        <?php echo 1 === 2; ?>
    </p>
</body>

</html>