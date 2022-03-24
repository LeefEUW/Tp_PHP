<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $a = 15;
    $b = 23;
    $c = $a; //15
    $a = $b; //23
    $b = $c; //15
    echo "$a<br>";
    echo "$b<br>";
?>
</body>
</html>