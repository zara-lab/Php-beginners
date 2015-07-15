<html>
<?php
    $title = "About me";
    $zaralabUrl = "http://zaralab.org/";
    $homePath = "index.php";

    $integer = 1;
    $float = 1.5;
    $string = 'I know how to escape \' in strings';
?>
<head>
    <title><?php echo "My Website"; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p>
        I &lt;3 <a href="<?php echo $zaralabUrl; ?>">ZaraLab</a>
    </p>
    <p>
        I know about PHP variables:<br />
        <code>
            <br />
            <?php echo "$integer is integer"; ?>
            <br />
            <?php echo "$float is float;" ?>
            <br />
            <?php echo $string ?>
        </code>
    </p>
    <p>
        <a href="<?php echo $homePath; ?>">Home</a>
    </p>
</body>
</html>
