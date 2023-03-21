<?php

function formatiereErstenBuchstabenJedesWortsGross($text)
{
    $worte = explode(' ', $text);

    $worteFormatiert = [];
    foreach ($worte as $w) {
        $worteFormatiert[] = ucfirst($w);
    }

    return implode(' ', $worteFormatiert);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Worte ganz Groß</title>
</head>

<body>
    <?php echo formatiereErstenBuchstabenJedesWortsGross('das ist ein toller satz'); ?>
</body>

</html>