<html>
<?php
    require_once './includes/functions.php';
    include './includes/config.php';

    // page meta data
    $title = "Home - ".$title; // Site title
    $pageTitle = "Customer Index"; // This page title

    // retrieve customers array
    $customers = getCustomers(); // All customers array
?>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>
        <?php echo $pageTitle; ?>
    </h1>
    <ul>
    <?php
        // Loop - http://php.net/manual/en/control-structures.foreach.php
        // print out first to see the structure of our array - uncomment below
        // echo '<pre>'; print_r($customers);
        foreach ($customers as $customer):
    ?>
        <li>
            <p>
                <?php echo $customer['name']['first']; ?> <?php echo $customer['name']['last']; ?>
                [<a href="./view.php?id=<?php echo $customer['id']; ?>">view</a>]
                <br>
                <?php echo $customer['phone']; ?>
                <br>
                <a href="mailto:<?php echo $customer['email']; ?>"><?php echo $customer['email']; ?></a>
            </p>
        </li>
    <?php endforeach; ?>

    </ul>
</body>
</html>
