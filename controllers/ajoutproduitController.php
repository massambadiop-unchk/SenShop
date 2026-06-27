<?php

$produits = getAllproduits();

if(isset($_POST["ajouter"])){

    extract($_POST);

    $image = "";

    if(

        isset($_FILES["image"]) &&
        !empty($_FILES["image"]["name"][0])

    ){

        $tmp = $_FILES["image"]["tmp_name"][0];

        $extension = pathinfo(

            $_FILES["image"]["name"][0],

            PATHINFO_EXTENSION

        );

        $image = uniqid().".".$extension;

        move_uploaded_file(

            $tmp,

            "images/".$image

        );

    }

    if(

        pasvide([

            $nom,
            $categorie,
            $prix,
            $stock,

        ])

    ){

        if(

            ajoutproduits(

                $nom,
                $categorie,
                $prix,
                $stock,
                $descript,
                $image

            )

        ){

            $message = "Produit ajouté avec succès";
            $type = "success";

        }else{

            $message = "Erreur lors de l'ajout";
            $type = "danger";

        }

    }else{

        $message = "Veuillez remplir tous les champs";
        $type = "danger";

    }

}



require_once("views/ajoutProduit.php");
// Controller Ajout Produit - Fatou Badji - L3 IDA UNCHK Groupe 67 2025
