<?php

$hauptstaedte = [
    'Deutschland' => 'Berlin',
    'England' => 'London',
    'Frankreich' => 'Paris',
    'Italien' => 'Rom',
    'Spanien' => 'Madrid',
];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Länder und Hauptstädte</title>
</head>

<body>
    <h1>Länder und Hauptstädte</h1>
    <table>
        <tr>
            <th>Land</th>
            <th>Hauptstadt</th>
        </tr>
        <?php foreach ($hauptstaedte as $land => $stadt) { ?>
            <tr>
                <td><?php echo $land; ?></td>
                <td><?php echo $stadt; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>