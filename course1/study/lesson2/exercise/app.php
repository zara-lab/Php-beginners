<?php

// include helper functions
require_once 'lib/functions.php';

// include array data
include 'data/array.php';

// EXTRA - run only in console
if(!isset($argv)) {
    printc('Fatal error', 'This app runs only in console');
    exit(-1);
}

// EXTRA - application command line arguments
$request = isset($argv[1]) ? $argv[1] : null;

// This check is required only for the EXTRA task
if(!$request || $request == 'search_key') {
    // search task
    include_once './includes/search_key.php';
}

// This check is required only for the EXTRA task
if(!$request || $request == 'replace') {
    // replace task
    include_once './includes/replace.php';
}

// This check is required only for the EXTRA task
if(!$request || $request == 'explode') {
    // explode task
    include_once './includes/explode.php';
}
