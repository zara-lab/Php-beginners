<?php

// Call 127.0.0.1:8000/index.php?name=Miro&cat=php

// print name if available
if(isset($_GET['name']))
{
    echo "Name: ".$_GET['name']."<br>";
}

// print category if available
if(isset($_GET['cat']))
{
    echo "Category: ".$_GET['cat']."<br>";
}

echo '<br><br><br>';

// Environment vars
echo "Client IP: ".$_SERVER['REMOTE_ADDR']."<br>";
echo "Path component of the URL: ".$_SERVER['REQUEST_URI']."<br>";
echo "User Agent: ".$_SERVER['HTTP_USER_AGENT']."<br>";

echo '<br><br><br>';

// Show all
echo "All \$_SERVER info:<br>";
foreach ($_SERVER as $key => $value) {
    echo "$key => $value<br>";
}
