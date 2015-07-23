<html>
<?php
    require_once './functions.php';

    $title = "Customers deteils"; // Site title
    $pageTitle = "Details"; // This page title

    $customers = array(); // All customers array
    getArrFromJson($customers);

    $request = $_GET['id'];
    foreach($customers as $value)
    {
      if($value['id'] == $request)
      {
        $customer = $value;
        //echo "match";
      }
    }

?>
<head>
    <title><?php echo $title ?></title>
</head>
<body>
    <h1>
        <!-- Page title 'Customer Profile' -->
        <?php echo "Customer details:<br>"; ?>
    </h1>
    <div>
        <!-- customer names, phone, email, age, picture, balance -->
        <?php
        echo "<li>";
        echo "Name: ".$customer['name']['first']." ".$customer['name']['last'];
        echo " phone: ".$customer['phone'];
        echo " email: ".$customer['email'];
        ?>
    </div>
    <p>
        <!-- customer 'about' -->
        <?php
        echo "<li>";
        echo "About: ".$customer['about'];
        ?>

    </p>
    <p>
        <a href="index.php" title="Back to the index">Back</a>
    </p>
</body>
</html>
