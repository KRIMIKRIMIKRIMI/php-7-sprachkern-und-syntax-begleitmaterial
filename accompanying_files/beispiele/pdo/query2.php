<?php

$db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

$db->query('SELECT * FROM duser'); // falscher Tabellenname
