<?php
    function insertProduit($bdd,$nom,$content){
        try{
            $req = $bdd->prepare("INSERT INTO produit(nom_produit, contenu_produit) VALUES(:nom_produit, :contenu_produit)");
            $req->execute(array(
                'nom_produit' => $nom,
                'contenu_produit' => $content
            ));






}
        catch(Exception $e)
{
//affichage d'une exception en cas d’erreur
die('Erreur : '.$e->getMessage());
}
    }
?>