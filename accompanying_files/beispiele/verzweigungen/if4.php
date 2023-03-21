<?php

$bewertung = $_REQUEST['bewertung'];

if ($bewertung == 'hervorragend') {
    $nachricht = 'Vielen Dank! Sie sind zu freundlich!';
} elseif ($bewertung == 'gut') {
    $nachricht = 'Danke! Wir freuen uns über positive Bewertungen.';
} elseif ($bewertung == 'durchschnittlich') {
    $nachricht = 'Danke! Wenigstens geben wir uns Mühe, oder?';
} elseif ($bewertung == 'schlecht') {
    $nachricht = 'Naja, es war echt spät, als ich das geschrieben habe!';
} elseif ($bewertung == 'miserabel') {
    $nachricht = 'War irgend etwas auf der Seite in Ordnung? Das Layout vielleicht?';
} elseif ($bewertung == 'grauenhaft') {
    $nachricht = 'Also das ist doch eine Unverschämtheit!!!';
} else {
    $nachricht = 'Was haben Sie denn da eingegeben?!';
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Bewertung</title>
</head>

<body>
    <h1>Bewertung</h1>
    <p>
        <?php echo $nachricht; ?>
    </p>
</body>

</html>