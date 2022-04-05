<?php
    function insertUser($bdd,$nom,$prenom,$mail,$mdp, $url){
        try{
            $req = $bdd->prepare("INSERT INTO utilisateur(nom_util, prenom_util, mail_util, mdp_util, img_util) VALUES(:nom_util, :prenom_util, :mail_util, :mdp_util, :img_util)");
            $req->execute(array(
                'nom_util' => $nom,
                'prenom_util' => $prenom,
                'mail_util' => $mail,
                'mdp_util' => $mdp,
                'img_util' => $url
            ));
}
        catch(Exception $e)
{
//affichage d'une exception en cas d’erreur
die('Erreur : '.$e->getMessage());
}
}
    function showAllUser($bdd){
        try{
            $req = $bdd->prepare('SELECT * FROM utilisateur');
            $req->execute();
            while ($data = $req->fetch()){
                $id= $data['id_util'];
                $nomUtil = $data['nom_util'];
                $prenomUtil = $data['prenom_util'];
                echo '<p><input type="checkbox" name="id_util[]" value="'.$id.'">
                <a href="updateUser.php?id='.$id.'">'.$nomUtil.'</a></p>';
            }
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    function deleteUser($bdd, $value){
        try{
            $req = $bdd->prepare('DELETE FROM utilisateur WHERE id_util = :id_util');
            $req->execute(array(
                'id_util' => $value
                ));
        }
        catch(Exception $e)
        {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
        }
    }
    function updateUser($bdd, $value,$nom, $prenom,$mail, $mdp){
        try{
            $req = $bdd->prepare('UPDATE utilisateur SET nom_util = :nom_util,
            prenom_util = :prenom_util, mail_util = :mail_util, mdp_util = :mdp_util WHERE id_util = :id_util');
            $req->execute(array(
                'id_util' => $value,
                'nom_util' => $nom,
                'prenom_util' => $prenom,
                'mail_util' => $mail,
                'mdp_util' => $mdp
                ));
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
?>
