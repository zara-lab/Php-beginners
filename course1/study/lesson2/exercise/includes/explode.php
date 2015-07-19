<?php

$search = "I love ZaraLab";
$key = array_search($search, $array);
$new = explode(' ', $search);
$array[$key] = $new;
printc('Taks Explode', $array);
