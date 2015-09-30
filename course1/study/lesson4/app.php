<?php

if (php_sapi_name() !== 'cli') {
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

    case 'edit':
        include('./includes/cli/list.php');
        include './includes/cli/edit.php';
        break;
    case 'view':
        include('./includes/cli/list.php');
        include './includes/cli/view.php';
        break;

    case 'delete':
        include('./includes/cli/list.php');
        include './includes/cli/delete.php';
        break;

    default:
        message('Action not found');
        exit(66);
        break;
}
