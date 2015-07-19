<?php

/**
 * Prints data to the console
 * output
 *
 * @param mixed $data
 * @return void
 */
function printc($label, $data)
{
    if(is_array($data)) {
        echo $label.': ';
        print_r($data);
    } else {
        echo $label.': '.$data."\n";
    }
}
