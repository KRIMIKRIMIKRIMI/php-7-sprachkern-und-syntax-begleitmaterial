<?php

$ich = [
    'vorname' => 'Jan',
    'nachname' => 'Teriete',
    'alter' => 'zu alt',
    'email' => 'jteriete@example.com',
];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ich</title>
</head>

<body>
    <h1>Ich</h1>
    <table>
        <tr>
            <th>Vorname</th>
            <td><?php echo $ich['vorname']; ?></td>
        </tr>
        <tr>
            <th>Nachname</th>
            <td><?php echo $ich['nachname']; ?></td>
        </tr>
        <tr>
            <th>Alter</th>
            <td><?php echo $ich['alter']; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $ich['email']; ?></td>
        </tr>
    </table>
</body>

</html>