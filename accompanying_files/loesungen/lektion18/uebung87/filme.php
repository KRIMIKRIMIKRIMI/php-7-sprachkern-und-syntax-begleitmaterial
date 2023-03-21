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
        <?php foreach ($filme as $f): ?>
            <tr>
                <td><?= $f['titel'] ?></td>
                <td><?= $f['dauer'] ?> Minuten</td>
                <td><?= $f['genre'] ?></td>
                <td>
                    <?= $f['regisseur']['vorname'] ?>
                    <?= $f['regisseur']['nachname'] ?>,
                    <?= $f['regisseur']['geschlecht'] ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>