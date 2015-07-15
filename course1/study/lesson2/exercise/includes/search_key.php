<?php

$search = 'Search me';
$key = array_search($search, $array);

if(false !== $key) {
    $message = sprintf('index is %d', $key);
    printc('Task Array Search', $message);
} else {
    printc('Task Array Search', 'index not found');
}
