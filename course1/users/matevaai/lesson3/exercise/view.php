<html>
<?php
    require_once('./lib/function.php');
    $title = "View Profile - Customers"; // Site title
    $pageTitle = "Customer Profile"; // This page title
    $customers = getCustomers();

    $id = false;
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }

    if ($id == false) {
        die("Ne moga da pokaja nishto");
    }

    $current = array();
    foreach ($customers as $customer) {
        if ($id == $customer["id"]) {
            $current = $customer;
            break; 
        }
    } 

    if (empty($current)) {
        die("ne moga da namerq turseniat ot vas klient");
    }
?>
<head>
    <title><?php echo $title ?></title>
</head>
<body>
    <h1><?php echo $pageTitle ?></h1>
    <div>
        <?php 
        echo $customer["name"]["first"]." ".$customer["name"]["last"];
        echo "<br>";
        echo $customer["phone"];
        echo "<br>";
        echo $customer["email"];
        echo "<br>";
        echo "age: ".$customer["age"];
        echo "<br>";
        echo '<img src="'.$customer["picture"].'" alt="profile picture">';
        // echo "<img src=\"".$customer["picture"]."\" alt=\"profile picture\" height=\"32\" wight=\"32\">";
        echo "<br>";
        echo "balance: ".$customer["balance"];
        echo "<br>";
        ?>
        <!-- customer names, phone, email, age, picture, balance -->
    </div>
    <p>
        <?php echo $customer ["about"] ?>
    </p>
    <p>
        <a href="./index.php" title="Home - Customers" Back to the index">Back</a>
    </p>
</body>
</html>
