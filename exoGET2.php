<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="#" method="post">
    
    <label>Prix hors-taxes</label>
    <input type="int" name="prixHT" id="prixHT">
    <br>
    <label>Quantité</label>
    <input type="int" name="qtx" id="qtx">
    <br>
    <label>Taxe sur la valeur ajoutée</label>
    <input type="" name="tva" id="tva">
    <br>
    <button type="submit">Envoyer</button>
    </form>
    <?php
    if (isset($_POST["prixHT"]) AND isset($_POST["qtx"]) AND isset($_POST["tva"]) AND $_POST["prixHT"] != "" AND $_POST["qtx"] != "" AND $_POST["tva"] != ""){
        $prixHT = $_POST["prixHT"];
        $qtx = $_POST["qtx"];
        $tva = $_POST["tva"];
        $ttc = $prixHT * $tva * $qtx;
        echo " Le prix TTC est égale à $ttc €";
}
        else{
            echo "Veuillez remplir les champs ";
        }
    ?>
</body>
</html>