<?php

$ich = [
    'vorname' => 'Jan',
    'nachname' => 'Teriete',
    'alter' => 'zu alt',
    'email' => 'jteriete@example.com',
];

$anderePerson = [
    'vorname' => 'Marco',
    'nachname' => 'Emrich',
    'alter' => 'älter',
    'email' => 'memrich@example.com',
];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ich und wer anders</title>
</head>

<body>
    <h1>Ich und wer anders</h1>
    <table>
        <tr>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Alter</th>
            <th>Email</th>
        </tr>
        <tr>
            <td><?php echo $ich['vorname']; ?></td>
            <td><?php echo $ich['nachname']; ?></td>
            <td><?php echo $ich['alter']; ?></td>
            <td><?php echo $ich['email']; ?></td>
        </tr>
        <tr>
            <td><?php echo $anderePerson['vorname']; ?></td>
            <td><?php echo $anderePerson['nachname']; ?></td>
            <td><?php echo $anderePerson['alter']; ?></td>
            <td><?php echo $anderePerson['email']; ?></td>
        </tr>
    </table>
</body>

</html>