<html>
<?php
    require_once './functions.php';

    $title = "Customers"; // Site title
    $pageTitle = "Customers"; // This page title
    $customers = array(); // All customers array
    getArrFromJson($customers);

?>
<head>
    <title><?php echo $title ?></title>
</head>
<body>
    <h1>
        <?php echo $pageTitle ?>
    </h1>
    <ul>
    <!-- For every customer new li tag - name, phone and email, "view more" link --></li>

    <?php foreach($customers as $value)
          {
            $id = $value['id'];
            echo "<li>";
            echo "Name: ".$value['name']['first']." ".$value['name']['last'];
            echo " phone: ".$value['phone'];
            echo " email: ".$value['email'];
            echo " <a href=\"view.php?id=$id\">view more</a>";
          }
      ?>
      </ul>
</body>
</html>
