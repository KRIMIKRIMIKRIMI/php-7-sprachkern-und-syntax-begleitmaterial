<?php

$test = '3.5678';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Type Casting</title>
</head>

<body>
    <p>
        <?php echo gettype(intval($test)); ?><br />
        <?php echo gettype((integer)$test); ?><br />
        <?php echo gettype((int)$test); ?>
    </p>
    
    <p>
        <?php echo gettype(floatval($test)); ?><br />
        <?php echo gettype((float)$test); ?>
    </p>
    
    <p>
        <?php echo gettype(strval($test)); ?><br />
        <?php echo gettype((string)$test); ?>
    </p>

    <p>
        <?php echo gettype((array)$test); ?><br />
        <?php var_dump((array)$test); ?>
    </p>

    <p>
        <?php echo gettype((object)$test); ?><br />
        <?php var_dump((object)$test); ?>
    </p>
</body>

</html>
