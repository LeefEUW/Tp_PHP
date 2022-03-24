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
    function test($a){
        if ($a > 0){
            echo "le nombre est positif ! ";
        }
        else if($a<0){
            echo "le nombre est négatif !";
        }
        else {
            echo "le chiffre est 0 ! ";
        }
    }
    test(0);
    ?>
</body>
</html>