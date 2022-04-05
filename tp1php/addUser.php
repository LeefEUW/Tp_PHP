<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout utilisateur</title>
</head>
<body>
    <h3>Ajouter un utilisateur :</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <p>Saisir votre nom :</p>
        <input type="text" name="nom_util">
        <p>Saisir votre prenom :</p>
        <input type="text" name="prenom_util">
        <p>Saisir votre adresse mail :</p>
        <input type="text" name="mail_util">
        <p>Saisir votre mot de passe  :</p>
        <input type="text" name="mdp_util">
        <input type="file" name="img_util">
        <p><input type="submit" value="Valider"></p>
    </form>
    <?php
        //fichier de connexion à la BDD
        include 'connectBdd.php';
        //function requête SQL
        include 'fonction.php';
        //test si les champs existent et sont remplis
        if(isset($_POST['nom_util'])AND isset($_POST['prenom_util']) AND isset($_POST['mail_util']) AND isset($_POST['mdp_util']) AND isset($_FILES['img_util']) AND 
        $_POST['nom_util'] != "" AND $_POST['prenom_util'] !="" AND $_POST['mail_util'] != "" AND $_POST['mdp_util'] != "" AND $_FILES['img_util']!=""){
            $nomUtil = $_POST['nom_util'];
            $prenomUtil = $_POST['prenom_util'];
            $mailUtil = $_POST['mail_util'];
            $mdpUtil = $_POST['mdp_util'];
            $nomTemp = $_FILES['img_util']['tmp_name'];
            $nomFile = $_FILES['img_util']['name'];
            $img = move_uploaded_file($nomTemp, "./img/$nomFile");
            $url =  "./img/$nomFile";
            // echo $url;
            insertUser($bdd,$nomUtil, $prenomUtil, $mailUtil, $mdpUtil, $url);
            
            echo "L'utilisateur à été ajouté en BDD";
        }
        else{
            echo 'Veuillez remplir les champs du  formulaire';
        }
    ?>
</body>
</html>