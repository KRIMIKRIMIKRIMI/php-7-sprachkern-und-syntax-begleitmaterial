<?php

require_once 'inc/konfiguration.inc.php';

$testdaten = [
    [
        'titel' => 'Blindheit per Definition',
        'erstellt_am' => time(),
        'autor' => 'inewton',
        'inhalt' => <<<'EOT'
            Mit Blindheit per Definition geschlagen, dennoch nicht unsichtbar,
            präsentiere ich mich als unbeachtetes und ungeliebtes Stiefkind
            zeitgenössischer Literatur. Meine Bestimmung liegt - wie ich selbst -
            in engen Grenzen und ist rein platzhalterischer Natur.
            
            Kann ein missbrauchtes Wortgefüge eigentlich noch Schlimmeres
            erleiden, als als Blindtext erdacht und vor der Öffentlichkeit
            versteckt zu werden?
        EOT
    ],
    [
        'titel' => 'Langweilig',
        'erstellt_am' => time(),
        'autor' => 'jsartre',
        'inhalt' => <<<'EOT'
            Dies ist ein Blindtext. Blindtexte sind zumeist weder informativ
            noch interessant, sondern ausgesprochen langweilig.
            
            So auch dieser.
        EOT
    ],
    [
        'titel' => 'Wenn ich gross bin',
        'erstellt_am' => time(),
        'autor' => 'ghegel',
        'inhalt' => <<<'EOT'
            Ich bin nur ein kleiner Blindtext. Wenn ich gross bin, will ich
            Ulysses von James Joyce werden. Aber jetzt lohnt es sich noch nicht,
            mich weiterzulesen. Denn vorerst bin ich nur ein kleiner Blindtext.
        EOT
    ],
];

// Überschreibe oder erzeuge eintraege.txt mit den Testdaten
file_put_contents(PFAD_EINTRAEGE, serialize($testdaten));

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Weblog - Testdaten laden</title>
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet"/>
</head>

<body>

<div id="gesamt">

    <header id="kopf">
        <h1>Mein Weblog</h1>
    </header>

    <section id="content">

        <p>Die Testdaten wurden erfolgreich gespeichert.</p>

        <p>
            <a href="index.php" class="backlink">Zurück zur Hauptseite</a>
        </p>

    </section>

    <footer id="fuss">
        Das ist das Ende
    </footer>

</div>

</body>

</html>