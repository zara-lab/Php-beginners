<?php

echo "Taks Replace: ";

$array1 = $array;

$index = array_search ('I\'m going to become PHP expert!',$array);

$repl = str_replace ('PHP', 'Software', $array[$index]);

$array1[$index] = $repl;

print_r($array1);
