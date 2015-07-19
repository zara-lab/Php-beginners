<?php

/**
 * Prints data to the console
 * output
 *
 * @param mixed $data
 * @return void
 */
function printc($data)
{
    if(is_array($data)) {
        print_r($data);
    } else {
        print($data."\n");
    }
}
