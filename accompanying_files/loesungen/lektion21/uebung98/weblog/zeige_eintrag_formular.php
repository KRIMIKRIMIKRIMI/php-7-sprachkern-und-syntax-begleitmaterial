<?php

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';
session_start();

// Nur ein eingeloggter Benutzer darf neue Einträge posten
if (!istEingeloggt()) {
    redirect('index.php');
}

$id = 0;

// Erstelle einen leeren Eintrag für das ausgelagerte Formular
$eintrag = [
    'titel' => '',
    'inhalt' => '',
];

// Es sind Formulardaten vorhanden
if (!empty($_POST)) {
    // Erstelle einen neuen Eintrag im Format der anderen Einträge
    $eintrag = [
        'titel' => trim($_POST['titel']),
        'autor' => $_SESSION['eingeloggt'],
        'inhalt' => trim($_POST['inhalt']),
    ];

    // Die SQL-Funktion NOW() erzeugt einen Wert mit dem akt. Zeitpunkt
    $sql = 'INSERT INTO eintraege (titel, erstellt_am, autor, inhalt)' .
        ' VALUES (:titel, NOW(), :autor, :inhalt)';

    $statement = $db->prepare($sql);
    $statement->execute($eintrag);

    // Ermittle die ID des Datensatzes
    $id = $db->lastInsertId();

    // Leite zur Erfolgsmeldung um und übermittle die ID
    redirect('eintrag_danke.php?id=' . $id);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Weblog - Neuen Eintrag schreiben</title>
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet" />
</head>

<body>

    <div id="gesamt">

        <header id="kopf">
            <h1>Mein Weblog</h1>
        </header>

        <section id="content">

            <h1>Schreiben Sie hier einen neuen Eintrag:</h1>

            <?php require 'inc/formular.tpl.php'; ?>

        </section>

        <aside id="menu">
            <?php require 'inc/hauptmenu.tpl.php'; ?>
        </aside>

        <footer id="fuss">
            Das ist das Ende
        </footer>

    </div>

</body>

</html>