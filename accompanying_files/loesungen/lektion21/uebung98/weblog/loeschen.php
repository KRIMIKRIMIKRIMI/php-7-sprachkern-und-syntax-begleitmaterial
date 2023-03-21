<?php

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';
session_start();

// Nur ein eingeloggter Benutzer darf Einträge löschen
if (!istEingeloggt()) {
    redirect('index.php');
}

if (!empty($_GET['id'])) {
    $sql = 'DELETE FROM eintraege WHERE id = ?';

    $statement = $db->prepare($sql);
    $statement->execute(
        [$_GET['id']]
    );
}

// Leite zur Startseite weiter.
redirect('index.php');
