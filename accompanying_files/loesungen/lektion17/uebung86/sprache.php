<?php

$begruessungen = [
    'en' => 'Welcome',
    'en-us' => 'Welcome',
    'de' => 'Willkommen',
    'de-de' => 'Willkommen',
    'nl' => 'Hartelijk welkom',
    'fi' => 'Tervetuloa',
    'tlh' => 'nuqneH'
];

[$bevorzugteSprache,] = explode(
    ',',
    $_SERVER['HTTP_ACCEPT_LANGUAGE'],
    2
);

if (isset($begruessungen[$bevorzugteSprache])) {
    $nachricht = $begruessungen[$bevorzugteSprache];
} else {
    $nachricht = 'Ihre Sprache wird leider nicht unterstützt';
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Lieblingssprache <?php echo $bevorzugteSprache; ?></title>
</head>

<body>
    <p><?php echo $nachricht; ?>!</p>
</body>

</html>