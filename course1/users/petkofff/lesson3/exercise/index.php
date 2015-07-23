<html>

<?php
    $title = "Customers"; // Site title
    $pageTitle = "Customer Index"; // This page title
    $customers = array(); // All customers array

    $json = file_get_contents('./data/customers.json');

    $customers = json_decode($json,true);
?>

<head>
    <title><?php echo $page; ?></title>
</head>
<body>
    <h1>
        <?php echo $pageTitle ?>
    </h1>
    <ul>
      <!-- For every customer new li tag - name, phone and email, "view more" link -->

      <?php 
        foreach ($customers as $key => $value) {
            echo "<li>";
            echo $value['name']['first']," ",$value['name']['last'],"'s phone is ",$value['phone'],". His/her email is ",$value['email'],".";
            echo "<a href=view.php?id=",$value['id'],">view more</a>";
            echo "</li>";
        }
       ?>
    </ul>
</body>
</html>
