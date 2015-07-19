<?php
include './array.php';

printf("\nYour choise is %d\n", $argv[1]);


function fsearch()
{
	/// task 1
	printf("\n\nTask Search\n\n");

	$target = "Search me";
	$index = array_search($target, $array);

	if($index >= 0)
	{
		printf("Task Array Search: index is %d", $index);
	}
	else
	{
		printf("Task Array Search: index not found");
	}
}

function freplace()
{
	//task 2
	printf("\n\nTask replace\n\n");

	$target = 'I\'m going to become PHP expert!';
	$index = array_search($target, $array);
	//printf("index = %d",$index);
	if($index >= 0)
	{
		//printf("format");
		$temp = $array[$index];
		$temp = str_replace("PHP", "software", $temp);
		$array[$index] = $temp;
	}

	print_r($array);
}

function fexplode()
{
	//Task 3
	printf("\n\nTask Explode\n\n");
	$target = "I love ZaraLab";
	$index = array_search($target, $array);
	if($index >= 0)
	{
		//printf("format");
		$temp = explode(" ", $array[$index]);
		$array[$index] = $temp;
	}

	print_r($array);
}

switch ($argv[1])
{
	case '1':
		fsearch();
		break;
	case '2':
		freplace();
		break;
	case '3':
		fexplode();
		break;
	default:
		printf("\n\nBad argument\n\n");
		break;
}
