<?php

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';
session_start();

// Nur ein eingeloggter Benutzer darf vorhandene Einträge bearbeiten
if (!istEingeloggt() || empty($_REQUEST['id'])) {
    redirect('index.php');
}

$id = (int)$_REQUEST['id'];

// Eintrag anhand seiner ID auslesen
$sql = 'SELECT * FROM eintraege WHERE id = ?';

$statement = $db->prepare($sql);
$statement->execute(
    [$id]
);
$eintrag = $statement->fetch();
unset($statement);

// Es sind Formulardaten vorhanden
if (!empty($_POST)) {
    $sql = 'UPDATE eintraege SET
        titel=:titel,
        inhalt=:inhalt
    WHERE id=:id';

    $statement = $db->prepare($sql);
    $statement->execute($_POST);

    // Leite zur Erfolgsmeldung um und übermittle die ID
    redirect('eintrag_danke.php?id=' . $id);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Weblog - Eintrag bearbeiten</title>
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet" />
</head>

<body>

    <div id="gesamt">

        <header id="kopf">
            <h1>Mein Weblog</h1>
        </header>

        <section id="content">

            <h1>Bearbeiten Sie hier einen vorhandenen Eintrag:</h1>

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