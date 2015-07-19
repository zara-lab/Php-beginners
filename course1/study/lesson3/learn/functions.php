<?php

require_once './lib/functions.php';

function multiply10($value)
{
    $value = $value * 10;
    return $value;
}

function multiply10ref(&$byReference)
{
    $byReference = multiply10($byReference);
}

$value = 2;
$multiply = multiply10($value);
$message1 = sprintf('%d * 10 = %d', $value, $multiply);
$message2 = sprintf('$value after multiply is %d', $value);
printc($message1);
printc($message2);

multiply10ref($value);
$message3 = sprintf('$value after multiply by reference is %d', $value);
printc($message3);
