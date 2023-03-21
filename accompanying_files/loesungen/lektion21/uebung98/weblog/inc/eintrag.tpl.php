<article class="eintrag">
    <header class="eintrag_oben">
        <h1><?= bereinige($e['titel']) ?></h1>
    </header>

    <p>
        <?= nl2br(bereinige($e['inhalt'])) ?>
    </p>

    <?php if (istEingeloggt()): ?>
        <div>
            [ <a
                href="bearbeiten.php?id=<?= (int)$e['id'] ?>"
            >Bearbeiten</a> ]
            [ <a
                href="loeschen.php?id=<?= (int)$e['id'] ?>"
            >Löschen</a> ]
        </div>
    <?php endif; ?>

    <footer class="eintrag_unten">
        <span>
            geschrieben von
            <?= BENUTZER_DATEN[$e['autor']]['vorname'] ?>
            <?= BENUTZER_DATEN[$e['autor']]['nachname'] ?>
            am
            <time datetime="<?= formatiereDatum($e['erstellt_am'], '%Y-%m-%dT%H:%M:%S') ?>">
                <?= formatiereDatum($e['erstellt_am'], '%d.%m.%Y um %H:%M') ?>
            </time>
        </span>
    </footer>
</article>