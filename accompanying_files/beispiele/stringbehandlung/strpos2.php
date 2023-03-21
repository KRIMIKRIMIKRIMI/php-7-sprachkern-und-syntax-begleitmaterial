<?php

$text = 'Hallo Welt du bist so schön!';

if (strpos($text, 'du')) {
    echo 'Das Wort "du" kommt im Text vor.';
}

if (strpos($text, 'Hallo')) {
    echo 'Das Wort "Hallo" kommt im Text vor.';
}
