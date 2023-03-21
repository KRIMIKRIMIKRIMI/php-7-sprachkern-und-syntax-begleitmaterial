<?php

$benutzerEingabe = '3 > 2 <p style="color: #ff0000;">Das hier ist rot!</p>';

echo htmlspecialchars(
    strip_tags($benutzerEingabe),
    ENT_QUOTES | ENT_HTML5,
    'UTF-8'
);
