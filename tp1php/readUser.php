<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>afficher la liste des utilisateurs</title>
</head>
<header>
        <a href="addUser.php">Ajouter un utilisateur</a>
        <a href="readUser.php">Consulter les utilisateurs</a>
        <a href="deleteUser.php">Supprimer un utilisateur</a>
        <a href="updateUser.php">Modifier un utilisateur</a>
</header>
<body>
    <h3>Liste des utilisateurs :</h3>
    <form action="" method="post">
    <?php
        //fichier de connexion à la BDD
        include 'connectBdd.php';
        //function requête SQL
        include 'fonction.php';
        showAllUser($bdd);
    ?>
        <input type="submit" value="Supprimer">
    </form>
    <?php
        if(isset($_GET['error'])){
            echo "<p>Veuillez sélectionner un utilisateur</p>";
        }
        //vérification de la super globale $_POST['id_prod']
        if(isset($_POST['id_util'])){
            //boucle pour parcourir chaque case cochés ($value équivaut à value en HTML)
            foreach($_POST['id_util'] as $value){
                deleteUser($bdd, $value);
                echo "<p>Suppression de l'utilisateur $value</p>";
            }
            //Script JS pour redirection vers showProduit.php dans 1500 ms 
            echo '<script>
            setTimeout(()=>{
                document.location.href="readUser.php"; 
            }, 1500);</script>';
            header('Location: readUser.php');
        }
        else{
            echo "<p>Veuillez cocher un ou plusieurs utilisateur à supprimer</p>";
        }
    ?>
</body>
</html>