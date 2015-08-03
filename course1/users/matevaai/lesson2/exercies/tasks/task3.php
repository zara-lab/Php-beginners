<?php

$search = 'I\'m going to become PHP expert!';
$search_index = array_search($search, $array);
$new = str_replace("PHP", "software", $search);
$array[$search_index] = $new;
printc($array);