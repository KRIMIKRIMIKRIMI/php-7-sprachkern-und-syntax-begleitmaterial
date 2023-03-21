<?php

$filme = [
    [
        'titel' => 'The Hitchhikers Guide to the Galaxy',
        'dauer' => 109,
        'genre' => 'SF',
        'regisseur' => 'Garth Jennings',
    ],
    [
        'titel' => 'Forrest Gump',
        'dauer' => 142,
        'genre' => 'Drama',
        'regisseur' => 'Robert Zemeckis',
    ],
    [
        'titel' => 'The Lord of the Rings: The Fellowship of the Ring',
        'dauer' => 208,
        'genre' => 'Fantasy',
        'regisseur' => 'Peter Jackson',
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
                <td><?php echo $f['regisseur']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>