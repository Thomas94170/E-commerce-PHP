<?php

require("../config/commandes.php");




?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <br>
    <br>
    <br>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 bg-secondary d-flex justify-content-center">
        <form method="post">
            <div class="mb-3 text-center">
                <label for="exampleInputEmail1" class="form-label">Titre de l'image</label>
                <input type="name" class="form-control" name="image" required>
                <div id="emailHelp" class="form-text"></div>
            </div>
            <br>
            <div class="mb-3 text-center">
                <label for="exampleInputPassword1" class="form-label">Nom du produit</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <br>
            <div class="mb-3 text-center">
                <label for="exampleInputPassword1" class="form-label">Prix</label>
                <input type="number" class="form-control" name="prix">
            </div>
            <br>
            <div class="mb-3 text-center">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control" name="desc"></textarea>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <button type=" submit" class="btn btn-success text-white" name="valider">Ajouter un séjour</button>

            </div>
            <br>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

<?php

if (isset($_POST['valider'])) {
    if (isset($_POST['image']) and isset($_POST['nom']) and isset($_POST['prix']) and isset($_POST['desc'])) {
        if (!empty($_POST['image']) and !empty($_POST['nom']) and !empty($_POST['prix']) and !empty($_POST['desc'])) {
            $image = htmlspecialchars(strip_tags($_POST['image']));
            $nom = htmlspecialchars(strip_tags($_POST['nom']));
            $prix = htmlspecialchars(strip_tags($_POST['prix']));
            $desc = htmlspecialchars(strip_tags($_POST['desc']));

            try {
                ajouter($image, $nom, $prix, $desc);
            } catch (Exception $e) {
                $e->getMessage();
            }
        }
    }
}


?>


<!-- cette page sert a ajouter un produit -->
<!-- nous prenons la structure d'un form -->
<!-- mon if ($_Post correspond a method post, valider au name de mon bouton ajouter) si ce bouton est valider il va verifier chacun des champs -->
<!-- mon if a l interieur reprend les infos de mon form avec leur name -->
<!-- mon if !empty demande si les champs sont vides -->
<!-- s il sont differents d empty on va récuperer les données et les filtrer -->
<!-- strip-tags() permets de filtrer les données en tt sécurité -->
<!-- nous allons maintenant les envoyer vers la base de données -->