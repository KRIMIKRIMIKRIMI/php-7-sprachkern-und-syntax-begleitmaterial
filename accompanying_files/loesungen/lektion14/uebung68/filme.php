<?php

$filme = [
    [
        'titel' => 'The Hitchhikers Guide to the Galaxy',
        'dauer' => 109,
        'genre' => 'SF',
        'regisseur' => [
            'vorname' => 'Garth',
            'nachname' => 'Jennings',
            'geschlecht' => 'm',
        ],
        'darsteller' => [
            'Martin Freeman',
            'Zooey Deschanel',
            'Warwick Davis',
        ],
    ],
    [
        'titel' => 'Forrest Gump',
        'dauer' => 142,
        'genre' => 'Drama',
        'regisseur' => [
            'vorname' => 'Robert',
            'nachname' => 'Zemeckis',
            'geschlecht' => 'm',
        ],
        'darsteller' => [
            'Tom Hanks',
            'Sally Field',
        ],
    ],
    [
        'titel' => 'The Lord of the Rings: The Fellowship of the Ring',
        'dauer' => 208,
        'genre' => 'Fantasy',
        'regisseur' => [
            'vorname' => 'Peter',
            'nachname' => 'Jackson',
            'geschlecht' => 'm',
        ],
        'darsteller' => [
            'Ian McKellen',
            'Viggo Mortensen',
        ],
    ],
];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Filme</title>
</head>

<body>
    <h1>Filme</h1>

    <table>
        <tr>
            <th>Titel</th>
            <th>Dauer</th>
            <th>Genre</th>
            <th>Regisseur</th>
        </tr>
        <?php foreach ($filme as $f) { ?>
            <tr>
                <td><?php echo $f['titel']; ?></td>
                <td><?php echo $f['dauer']; ?> Minuten</td>
                <td><?php echo $f['genre']; ?></td>
                <td>
                    <?php echo $f['regisseur']['vorname']; ?>
                    <?php echo $f['regisseur']['nachname']; ?>,
                    <?php echo $f['regisseur']['geschlecht']; ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>