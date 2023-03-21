<?php

function testeReturn()
{
    echo 'Ich komme vor return.';
    return;
    echo 'Ich komme nach return. Niemand sieht mich!';
}

testeReturn();
