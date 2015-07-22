<?php

function printc($data)
{
    if(is_array($data)) {
        print_r($data);
    } else {
        echo $data."\n";
    }
}

function fsearch(&$arr)
{
  /// task 1
  printf("\n\nTask Array Search: ");

  $searchStr = "Search me";

	if(!isset($arr))
  {
    //must throw exception here
    return;
  }
  $index = array_search($searchStr, $arr);

	if($index !== false)
	{
		printf("index is %d", $index);
	}
	else
	{
		printf("index not found");
	}

  printf("\n\n");
}

function freplace(&$arr)
{
	//task 2
	printf("\n\nTask replace\n\n");
  if(!isset($arr))
  {
    //must throw exception here
    return;
  }
	$target = 'I\'m going to become PHP expert!';
	$index = array_search($target, $arr);
	//printf("index = %d",$index);
	if($index !== false)
	{
		//printf("format");
		$temp = $arr[$index];
		$temp = str_replace("PHP", "software", $temp);
		$arr[$index] = $temp;
	}

	printc($arr);
}

function fexplode(&$arr)
{
	//Task 3
	printf("\n\nTask Explode\n\n");
  if(!isset($arr))
  {
    //must throw exception here
    return;
  }
	$target = "I love ZaraLab";
	$index = array_search($target, $arr);
	if($index !== false)
	{
		//printf("format");
		$temp = explode(" ", $arr[$index]);
		$arr[$index] = $temp;
	}

	printc($arr);
}
