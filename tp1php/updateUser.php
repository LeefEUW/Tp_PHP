<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="addUser.php">Ajouter un utilisateur</a>
        <a href="readUser.php">Consulter les utilisateurs</a>
        <a href="deleteUser.php">Supprimer un utilisateur</a>
        <a href="updateUser.php">Modifier un utilisateur</a>
</header>
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
        include 'fonction.php';
        //test si $_GET['id'] existe
        if(isset($_GET['id']) AND $_GET['id'] !=''){
            //stocke $_GET['id'] dans une variable $value
            $value = $_GET['id'];
            //test le contenu des champs du formulaire
            if(isset($_POST['nom_util'])AND isset($_POST['prenom_util']) AND isset($_POST['mail_util']) AND isset($_POST['mdp_util']) AND
                $_POST['nom_util'] != "" AND $_POST['prenom_util'] !="" AND $_POST['mail_util'] !=""  AND $_POST['mdp_util'] !=""){
                //stocket dans des variables les super globales POST
                $nom = $_POST['nom_util'];
                $prenom = $_POST['prenom_util'];
                $mail = $_POST['mail_util'];
                $mdp = $_POST['mdp_util'];
                //appele la méthode updateProduit
                updateUser($bdd, $value,$nom, $prenom, $mail, $mdp);
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
            header('Location: readuser.php?error');
        }
    ?>
</body>
</html>