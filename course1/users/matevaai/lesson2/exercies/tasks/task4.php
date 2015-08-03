<?php
$search = 'I love ZaraLab';
$search_index = array_search($search, $array);
$new = explode(" ",$search);
$array[$search_index] = $new;
printc($array);
