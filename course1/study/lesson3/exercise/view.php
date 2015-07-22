<html>
<?php
    require_once './includes/functions.php';
    include './includes/config.php';

    // Die if id not present
    if(!isset($_GET['id'])) {
        die('Missing customer ID');
    }

    // page meta data
    $title = "%s - ".$title; // Site title
    $pageTitle = "%s | %s"; // This page title

    // retrieve customers array and the customer id from the GET page params
    $customers = getCustomers(); // All customers array
    $customerId = htmlspecialchars($_GET['id']); // Current customer ID
    $customer = array(); // Current customer array

    // Loop - http://php.net/manual/en/control-structures.foreach.php
    // Find matching customer id, assign to $customer variable
    // print out first to see the structure of our array - uncomment below
    // echo '<pre>'; print_r($customers);
    foreach ($customers as $value) {
        if($value['id'] == $customerId) {
            $customer = $value;
            break;
        }
    }

    // If $customer variable is empty, die with a propper message
    if(empty($customer)) {
        die('Customer not found!');
    }

    // Assign first and last name to a variable
    $names = $customer['name']['first'].' '.$customer['name']['last'];

?>
<head>
    <title><?php printf($title, $names); ?></title>
</head>
<body>
    <h1>
        <?php printf($pageTitle, $names, $customer['balance']); ?>
    </h1>
    <p>
        <img src="<?php echo $customer['picture'] ?>" alt="Profile image" />
        <?php echo $names; ?>
        <br>
        <br>
        <strong>Phone:</strong> <?php echo $customer['phone']; ?>
        <br>
        <strong>Email:</strong> <?php echo '<a href="mailto:">'.$customer['email'].'</a>'; ?>
        <br>
        <strong>Age:</strong> <?php echo $customer['age']; ?>
        <br>
        <strong>Balance:</strong> <?php echo $customer['balance']; ?>
    </p>
    <p>
        <?php echo nl2br($customer['about']); ?>
    </p>
    <p>
        <a href="index.php" title="Back to the index">Back</a>
    </p>
</body>
</html>
