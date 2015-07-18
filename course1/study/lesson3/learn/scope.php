<?php

require_once './lib/functions.php';

$var = 10;
function assignvar()
{
    $var = 1;
    $message = sprintf('Value of $var inside the function is %d', $var);
    printc($message);
}

assignvar();
printc(sprintf('Value of $var outside the function is %d', $var));
