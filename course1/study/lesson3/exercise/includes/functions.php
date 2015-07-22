<?php

/**
 * Retrieve customer data, convert it to an array
 *
 * @return array
 */
function getCustomers()
{
    $data = file_get_contents('./data/customers.json');
    return json_decode($data, true);
}
