<?php
include './data/array.php';
require_once './lib/functions.php';

if(!isset($argv[1]))
{
	printf("\nMissing argument, enter 1-3 to choice task\n");
	return;
}
if($argv[1] < 1 || $argv[1] > 3)
{
	printf("\nWrong argument, enter 1-3 to choice task\n");
	return;
}

switch ($argv[1])
{
	case '1':
		fsearch($array);
		break;
	case '2':
		freplace($array);
		break;
	case '3':
		fexplode($array);
		break;
	default:
		// ???
		printf("\n\nBad argument\n\n");
		break;
}
