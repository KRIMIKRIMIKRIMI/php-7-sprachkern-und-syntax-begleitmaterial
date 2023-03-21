<?php

[$a, $b, $c] = [1, 2, 3]; // $a = 1, $b = 2, $c = 3

var_dump($a, $b, $c);

[$a, $b, $c, $d] = [1, 2, 3]; // Undefined offset: 3

[$a,] = [1, 2, 3]; // $a = 1
[$a] = [1, 2, 3]; // $a = 1

var_dump($a);

[$a, , $b] = [1, 2, 3]; // $a = 1, $b = 3

var_dump($a, $b);

[0 => $a, 2 => $b] = [1, 2, 3]; // $a = 1, $b = 3

var_dump($a, $b);
