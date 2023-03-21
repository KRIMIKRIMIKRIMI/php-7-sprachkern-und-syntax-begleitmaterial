<?php

$personen = ['Thorsten', 'Marco', 'Frank'];
file_put_contents('personen.txt', serialize($personen));
