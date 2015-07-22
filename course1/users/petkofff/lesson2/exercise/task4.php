<?php 

$ind = array_search ("I love ZaraLab",$array);

$r = explode (' ',$array[$ind]);

$array [$ind] = $r;

echo "Taks Explode: ";
print_r($array);