<?php

$name = $_POST['name'];
$email = $_POST['email'];
$inhalt = $_POST['inhalt'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Auslesen</title>
</head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <th>Inhalt</th>
            <td><?php echo $inhalt; ?></td>
        </tr>
    </table>
</body>

</html>