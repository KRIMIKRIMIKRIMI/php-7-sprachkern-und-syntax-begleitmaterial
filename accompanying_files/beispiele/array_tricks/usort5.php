<?php

function vergleichsfunktion($a, $b)
{
    return [$a['nachname'], $a['vorname']] <=> [$b['nachname'], $b['vorname']];
}

$personen = [
    ['vorname' => 'Hans', 'nachname' => 'Schmidt'],
    ['vorname' => 'Frank', 'nachname' => 'Meier'],
    ['vorname' => 'Elisabeth', 'nachname' => 'Maier'],
    ['vorname' => 'Elisabeth', 'nachname' => 'Schmidt'],
];

usort($personen, 'vergleichsfunktion');

?>
<pre><?php var_dump($personen); ?></pre>