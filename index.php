<?php 
    include 'config/config.php';
    include 'model/class.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?
        $calc = new Calculator;
        
        echo $calc->MC();
        echo "<pre>";
        echo $calc->MS(5);
        echo "<pre>";
        echo $calc->MPlus(5);
        echo "<pre>";
        echo $calc->MMinus(3);
        echo "<pre>";
        echo $calc->Plus(25,23);
        echo "<pre>";
        echo $calc->Minus(25,23);
        echo "<pre>";
        echo $calc->Multiplicated(25,23);
        echo "<pre>";
        echo $calc->Devine(10,2);
        echo "<pre>";
        echo $calc->Percent(100,25);
        echo "<pre>";
        echo $calc->Equally(25,25);
        echo "<pre>";
        echo $calc->degreeOf(10,2);
        echo "<pre>";
    ?>
</body>
</html>