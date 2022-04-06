<?php
function ajouter($image, $nom, $prix, $desc)
{
    if (require("connexion.php")) {
        $req = $access->prepare("INSERT INTO produits(image, nom, prix, description) VALUES($image, $nom, $prix, $desc)");

        $req->execute(array($image, $nom, $prix, $desc));

        $req->closeCursor();
    }
}

function afficher()
{
    if (require("connexion.php")) {
        $req = $access->prepare("SELECT * FROM produits ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
    }
}

function supprimer($id)
{
    if (require("connexion.php")) {
        $req = $access->prepare("DELETE FROM produits WHERE id=?");

        $req->execute(array($id));
    }
}




?>

<!-- notre fonction sert à ajouter un produit qui possede un nom, une image, description et un prix (sous format de variable) -->
<!-- ajout d'un if, si tu fais une connexion avec la bdd et que cela fonctionne execute moi ce code -->
<!-- creation de la var $req qui contient notre access a quoi a notre nom de la table de notre BDD (INSERT INTO est natif de sql) -->
<!-- nous specifions les noms qui sont dans notre table produits (ce ne sont pas des var) et en VALUES les var qui sont en parametres de notre fonction ajouter  -->
<!-- nous faisons ensuite une req pour l'execution  qui prends un array avec en prametres nos var qui sont en param de la function ajouter -->
<!-- closeCursor pour cloturer nos instructions -->

<!-- creation de la function afficher  -->
<!-- un if pareil demandant d afficher tout * de la table produits par ordre d id décroissant -->
<!-- ORDER BY et DESC sont natifs -->
<!-- la var $data retourne notre requete ou l ont demande avec un fetchALL de recup sous forme d objets notre PDO  -->

<!-- mm logique creation de notre function supprimer pour enlever un produit, prend en param la var $id -->
<!-- dans notre access nous lui demandons de supprimer  FROM produits WHERE id -->
<!-- dans l execute  en param notre array qui a en param $id (qui est celui de notre WHERE id) -->