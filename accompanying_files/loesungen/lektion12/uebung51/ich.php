<?php

$ich = [
    'vorname' => 'Jan',
    'nachname' => 'Teriete',
    'alter' => 'zu alt',
    'geschlecht' => 'm',
];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ich</title>
</head>

<body>
    <table>
        <?php foreach ($ich as $k => $v) { ?>
            <tr>
                <td><?php echo $k; ?></td>
                <td><?php echo $v; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>