<html>
<?php

require_once('./lib/function.php');
$customers = getCustomers();

?>
<head>
	<title>Home - Customers</title>
</head>
<body>
	<h1>Customer index</h1>
	<ul>
<?php
	foreach ($customers as $customer) {
		echo "<li>";
		echo $customer["name"]["first"]." ".$customer["name"]["last"];
		echo ' <a href="./view.php?id='.$customer["id"].'">view more</a>';
		echo "<br>";
		echo $customer["phone"]." | ".$customer["email"];
		echo "<br><br>";

		echo "</li>";
	}
?>
	</ul>

</body>
</html>
