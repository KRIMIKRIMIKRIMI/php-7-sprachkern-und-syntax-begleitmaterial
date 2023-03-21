<?php

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';

// Falls die Tabelle schon existiert, wegräumen
$db->query('DROP TABLE IF EXISTS eintraege');

$db->query(
    'CREATE TABLE eintraege (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        titel VARCHAR(255),
        erstellt_am DATETIME,
        autor VARCHAR(30),
        inhalt TEXT
    ) DEFAULT CHARSET = utf8'
);

$testdaten = [
    [
        'titel' => 'Blindheit per Definition',
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
        'autor' => 'jsartre',
        'inhalt' => <<<'EOT'
            Dies ist ein Blindtext. Blindtexte sind zumeist weder informativ
            noch interessant, sondern ausgesprochen langweilig.
            
            So auch dieser.
        EOT
    ],
    [
        'titel' => 'Wenn ich gross bin',
        'autor' => 'ghegel',
        'inhalt' => <<<'EOT'
            Ich bin nur ein kleiner Blindtext. Wenn ich gross bin, will ich
            Ulysses von James Joyce werden. Aber jetzt lohnt es sich noch nicht,
            mich weiterzulesen. Denn vorerst bin ich nur ein kleiner Blindtext.
        EOT
    ],
];

// Die SQL-Funktion NOW() erzeugt einen Wert mit dem akt. Zeitpunkt
$sql = 'INSERT INTO eintraege (titel, erstellt_am, autor, inhalt)' .
    ' VALUES (:titel, NOW(), :autor, :inhalt)';

$statement = $db->prepare($sql);
foreach ($testdaten as $eintrag) {
    $statement->execute($eintrag);
}

redirect('index.php');
