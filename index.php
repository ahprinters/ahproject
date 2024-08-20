<?php
$hello = "Hello World";
$firstNumber = 35;
$lastNumber = 45;
$sum = $firstNumber + $lastNumber;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "I want to say" . $hello;?></h1>
    <h2><?php echo "The Sum of two numbers is:" .$sum;?></h2>
</body>
</html>