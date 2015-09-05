<?php

if (!isset($argv)) {
    die('Access denied');
}

require_once('./lib/functions.php');

$action = isset($argv[1]) ? $argv[1] : 'list';

switch ($action) {
    case 'new':
    case 'add':
        include './includes/cli/new.php';
        break;

    case 'list':
        include './includes/cli/list.php';
        break;

    case 'delete':
        include('./includes/cli/list.php');
        include './includes/cli/delete.php';
        break;

    default:
        message('Action not found');
        break;
}
