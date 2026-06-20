<?php

if(isset($_POST["ajouter"])){

    extract($_POST);

    if(pasvide([$nom])){

        if(ajoutCategorie($nom, $descript)){

            $message = "Catégorie ajoutée avec succès";
            $type = "success";

        }else{

            $message = "Erreur lors de l'ajout";
            $type = "danger";

        }

    }else{

        $message = "Le nom est obligatoire";
        $type = "danger";

    }

}



require_once("views/ajoutcategorie.php");

?>