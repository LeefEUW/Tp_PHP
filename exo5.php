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
        $a = 10;
        $b = 0.2;
        $c = 2;
    function TTC($prixHT, $nbrArt, $txTVA){
        echo "$prixHT <br>";
        echo "$nbrArt<br>";
        echo "$txTVA<br>";
        return $prixHT * $txTVA * $nbrArt;
    }
    echo TTC($a,$b,$c);
    ?>
</body>
</html>