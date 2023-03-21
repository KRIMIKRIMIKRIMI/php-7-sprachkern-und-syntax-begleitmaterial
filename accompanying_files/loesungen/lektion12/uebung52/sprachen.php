<?php

$sprachen = ['PHP', 'JavaScript', 'Ruby', 'Python', 'Java', 'Perl'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Programmiersprachen</title>
</head>

<body>
    <ul>
        <?php for ($i = 0; $i < count($sprachen); $i++) { ?>
            <li><?php echo $sprachen[$i]; ?></li>
        <?php } ?>
    </ul>
</body>

</html>