<form
    action="<?= bereinige($_SERVER['PHP_SELF']) ?>"
    method="post"
>
    <input
        type="hidden"
        name="id"
        value="<?= $id ?>"
    />

    <input
        type="text" required="required"
        name="titel" id="titel"
        placeholder="Titel"
        value="<?= bereinige($eintrag['titel']) ?>"
    />

    <textarea
        cols="50" rows="10" required="required"
        name="inhalt" id="inhalt"
        placeholder="Inhalt"
    ><?= bereinige($eintrag['inhalt']) ?></textarea>

    <input type="submit" value="Speichern" />
</form>