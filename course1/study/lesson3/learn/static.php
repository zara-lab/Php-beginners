<?php

require_once './lib/functions.php';

function countit()
{
    static $count = 0; // default value
    $count++;
    printc("Count: $count");
}

countit();
countit();
countit();
countit();
countit();
countit();
countit();
countit();
countit();
countit();
