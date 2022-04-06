<?php
try {
    $access = new pdo("mysql:host=localhost;dbname=monoshop;charset=utf8", "root", "");

    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (Exception $e) {

    $e->getMessage();
}

?>
<!-- mise en relation avec notre base de données monoshop créee sur phpMyAdmin -->
<!-- $access est notre variable  -->
<!-- pdo sert a faire les transactions avec la base de données elle est native a PHP-->
<!-- dans pdo mysql notre host est en localhost, le nom de la bdd est monoshop charset utf8, notre id root et mot de passe vide -->
<!-- notre deuxieme var access sert a la gestion des erreurs -->
<!-- le try catch serta a soit tu m affiches mes données, soit tu me retournes un message d'erreur  -->