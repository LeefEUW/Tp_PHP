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
    <form action="" method="get">
    
    <input type="int" name="inp1" id="inp1">
    <input type="int" name="inp2" id="inp2">
    if (isset($_GET["inp1"])) AND isset($_GET["inp2"])){
        $inp1 = $_GET["inp1"];
        $inp2 = $_GET["inp2"];
        $addition = $inp1 + $inp2;
        echo "$addition"
    }
    ?>
</body>
</html>