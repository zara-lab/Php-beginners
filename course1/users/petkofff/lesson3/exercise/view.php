<html>
<?php
    $title = "Customers"; // Site title
    $pageTitle = "Customer Profile"; // This page title
    $customers = array(); // All customers array
    $customerId = $_GET['id']; // Current customer ID
    $customer = array(); // Current customer array

    $json = file_get_contents('./data/customers.json');

    $customers = json_decode($json,true);

    foreach ($customers as $key => $value) if ($value['id']==$customerId) $customer = $value;
?>
<head>
    <title><?php echo $title;?></title>
</head>
<body>
    <h1>
        <?php echo $pageTitle; ?>
    </h1>
    <div>
        <!-- customer names, phone, email, age, picture, balance -->
        <h3><?php echo $customer['name']['first']," ",$customer['name']['last']; ?></h3>
        <?php 
            echo $customer['phone'],"<br>",$customer['email'],"<br>";
            echo '<img src="',$customer['picture'],'" alt="profile picture">',"<br>";
            echo $customer['balance'];
         ?>
    </div>
    <p>
        <?php 
            echo $customer['about'];
         ?>
    </p>
    <p>
        <a href="index.php" title="Back to the index">Back</a>

    </p>
</body>
</html>
