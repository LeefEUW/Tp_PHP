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
        function Categorie($age){
        switch ($age) {
            case $age >=6 and $age<= 7:
                echo "l'enfant est un poussin";
                break;
                case  $age >=8 and  $age<= 9:
                    echo "l'enfant est un pupille";
                    break;
                    case $age >=10 and $age<= 11:
                        echo "l'enfant est un minime";
                        break;
                        case $age >12:
                            echo "l'enfant est un cadet";
                            break;
            default:
                echo "l'enfant est trop jeune.";
                break;
        }
    }
    Categorie(3);
    ?>
</body>
</html>