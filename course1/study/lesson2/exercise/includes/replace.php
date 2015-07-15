<?php

$search = "I'm going to become PHP expert!";
$key = array_search($search, $array);
$new = str_replace('PHP', 'software', $search);
$array[$key] = $new;
printc('Taks Replace', $array);
