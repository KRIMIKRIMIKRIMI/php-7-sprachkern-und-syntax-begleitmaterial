<?php

$text = 'Hallo Welt du bist so schön!';

if (strpos($text, 'du') !== false) {
    echo 'Das Wort "du" kommt im Text vor.';
}

if (strpos($text, 'Hallo') !== false) {
    echo 'Das Wort "Hallo" kommt im Text vor.';
}
