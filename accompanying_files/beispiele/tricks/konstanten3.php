<?php

function zeigeSinn()
{
    echo 'Der Sinn ist: ' . SINN_DES_LEBENS;
}

define('SINN_DES_LEBENS', 42);

zeigeSinn();
