<?php

$bewertung = $_REQUEST['bewertung'];

switch ($bewertung) {
    case 'hervorragend':
        $nachricht = 'Vielen Dank! Sie sind zu freundlich!';
        break;
    case 'gut':
        $nachricht = 'Danke! Wir freuen uns über positive Bewertungen.';
        break;
    case 'durchschnittlich':
        $nachricht = 'Danke! Wenigstens geben wir uns Mühe, oder?';
        break;
    case 'schlecht':
        $nachricht = 'Naja, es war echt spät, als ich das geschrieben habe!';
        break;
    case 'miserabel':
        $nachricht = 'War irgend etwas auf der Seite in Ordnung? Das Layout vielleicht?';
        break;
    case 'grauenhaft':
        $nachricht = 'Also das ist doch eine Unverschämtheit!!!';
        break;
    default:
        $nachricht = 'Was haben Sie denn da eingegeben?!';
        break;
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