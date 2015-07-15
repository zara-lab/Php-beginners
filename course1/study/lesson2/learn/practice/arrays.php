<?php
printc($array);
printc($array[0]);
printc($array[1]);

if(isset($array[3])) {
    printc($array[3]);
}

$search_index = array_search('First element', $array);
printc($search_index);

if($search_index !== false) {
    printc($array[$search_index]);
}

$check = array_key_exists(0, $array);
printc($check);
