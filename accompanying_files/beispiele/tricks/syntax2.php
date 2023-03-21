<?php

$obst = ['Apfel', 'Birne', 'Kiwi', 'Mango'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Syntaxcheck</title>
</head>

<body>
    <?php foreach ($obst as $o): ?>
        <p>
            <?php if ($o === 'Apfel'): ?>
                Meinen Apfel ess ich nicht!
            <?php else: ?>
                Oh lecker, eine <strong><?php echo $o; ?></strong>!
            <?php endif; ?>
        </p>
    <?php endforeach; ?>
</body>

</html>