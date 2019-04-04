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
        $calc = new calculator;
        echo $calc->getResult(2,'wer','+');
        echo "<pre>";
        echo $calc->getResult(2,2,'-');
        echo "<pre>";
        echo $calc->getResult(2,2,'*');
        echo "<pre>";
        echo $calc->getResult(0,0,'/');
        echo "<pre>";
        echo $calc->getResult(100,25,'%');
        echo "<pre>";
        echo $calc->getResult(2,2,'^');
        echo "<pre>";
        echo $calc->MC();
        echo "<pre>";
        echo $calc->MS(5);
        echo "<pre>";
        echo $calc->MPlus(5);
        echo "<pre>";
        echo $calc->MMinus(3);
        echo "<pre>";
    ?>
</body>
</html>