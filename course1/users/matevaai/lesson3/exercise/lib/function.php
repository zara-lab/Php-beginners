<?php

function getCustomers()
{
	$file = file_get_contents("./data/customers.json");
	$customers = json_decode($file, true);
	return $customers;
}
