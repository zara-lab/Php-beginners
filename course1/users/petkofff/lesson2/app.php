<?php 
include "task1.php";

if (count($argv)==1)
{
	include "task2.php";
	include "task3.php";
	include "task4.php";
}

else{

	if ($argv[1]=="search_key") include "task2.php";

	if ($argv[1]=="replace") include "task3.php";

	if ($argv[1]=="explode") include "task4.php";

}

echo "\n";
