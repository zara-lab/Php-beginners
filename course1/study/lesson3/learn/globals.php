<?php

require_once './lib/functions.php';

$var = 10;
function addOne()
{
    global $var;
    $var++;
}

addOne();
$message = sprintf('Value of $var is %d', $var);
printc($message);


function addOneAlt()
{
    $GLOBALS['var']++;
}

addOneAlt();
$message = sprintf('Value of $var is %d', $var);
printc($message);
