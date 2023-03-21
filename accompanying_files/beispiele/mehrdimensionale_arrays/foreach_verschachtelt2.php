<?php

$staedte = [
    [
        'name' => 'München',
        'land' => 'Deutschland',
        'einwohner' => 1300000,
        'partnerstaedte' => [
            'Bordeaux',
            'Cincinnati',
            'Edinburgh',
            'Harare',
            'Kiew',
        ],
    ],
    [
        'name' => 'Berlin',
        'land' => 'Deutschland',
        'einwohner' => 3400000,
        'partnerstaedte' => [
            'Paris',
            'Budapest',
            'Mexiko City',
            'Tokio',
            'Istanbul',
            'Moskau',
        ],
    ],
    [
        'name' => 'Paris',
        'land' => 'Frankreich',
        'einwohner' => 2200000,
        'partnerstaedte' => [
            'Rom',
            'Berlin',
            'Kyoto',
            'Mexiko City',
            'Seoul',
            'Washington',
        ],
    ],
];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Städte</title>
</head>

<body>
    <h1>Städte</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Land</th>
            <th>Einwohner</th>
            <th>Partnerstädte</th>
        </tr>
        <?php foreach ($staedte as $stadt) { ?>
            <tr>
                <td><?php echo $stadt['name']; ?></td>
                <td><?php echo $stadt['land']; ?></td>
                <td><?php echo $stadt['einwohner']; ?></td>
                <td>
                    <ul>
                        <?php foreach ($stadt['partnerstaedte'] as $partner) { ?>
                            <li><?php echo $partner; ?></li>
                        <?php } ?>
                    </ul>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>