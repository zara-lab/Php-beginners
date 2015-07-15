<html>
<?php
    $title = "My Website";
    $pageTitle = "Welcome to <em>$title</em>";
    $aboutPath = "about.php";
    $today = date('l');
?>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>
        <?php echo $pageTitle; ?>
    </h1>
    <p>
        Today is <strong><?php echo $today; ?></strong>
    </p>
    <p>
        <a href="<?php echo $aboutPath; ?>">About me</a>
    </p>
</body>
</html>
