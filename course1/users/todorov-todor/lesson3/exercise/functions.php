<?php
function getArrFromJson(&$arr)
{
  //echo "test";
  $customers_ =  file_get_contents("./data/customers.json");
  $arr = json_decode($customers_, true);
}
