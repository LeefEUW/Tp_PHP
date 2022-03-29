<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Modifier un produit :</h3>
    <form action="" method="post">
    <p>Saisir votre nom :</p>
        <input type="text" name="nom_util">
        <p>Saisir votre prenom :</p>
        <input type="text" name="prenom_util">
        <p>Saisir votre adresse mail :</p>
        <input type="text" name="mail_util">
        <p>Saisir votre mot de passe  :</p>
        <input type="text" name="mdp_util">
        <p><input type="submit" value="Valider"></p>
    </form>
    <!--Import-->
    <?php
        //fichier de connexion à la BDD
        include 'connectBdd.php';
        //function requête SQL
        include 'function.php';
        //test si $_GET['id'] existe
        if(isset($_GET['id']) AND $_GET['id'] !=''){
            //stocke $_GET['id'] dans une variable $value
            $value = $_GET['id'];
            //test le contenu des champs du formulaire
            if(isset($_POST['nom_produit'])AND isset($_POST['contenu_produit']) AND
                $_POST['nom_produit'] != "" AND $_POST['contenu_produit'] !=""){
                //stocket dans des variables les super globales POST
                $nom = $_POST['nom_produit'];
                $content = $_POST['contenu_produit'];
                //appele la méthode updateProduit
                updateProduit($bdd, $nom, $content, $value);
                //afficher un message de confirmation
                echo "<p>$nom à été modifié en BDD</p>";
            }
            //test si les champs du formulaire ne sont pas remplis
            else{
                echo '<p>Veuillez remplir les champs du  formulaire</p>';
            }
        }
        //test si l'id n'existe pas 
        else{
            header('Location : showProduit.php?error');
        }
    ?>
</body>
</html>