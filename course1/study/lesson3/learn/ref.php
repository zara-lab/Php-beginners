<?php

require_once './lib/functions.php';

$var = 'Value';
$ref1 =& $var;
$ref2 = &$ref1;

$ref2 = 'Changed';

$result = sprintf('$var is %s, $ref1 is %s, $ref2 is %s', $var, $ref1, $ref2);
printc($result);
