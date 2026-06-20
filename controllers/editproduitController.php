<?php
$produit    = null;
$categories = getAllcategories();
if (isset($_GET["id"])) {
    $produit = getProduitsById($_GET["id"]);
    if (!$produit) { header("Location: ?site=adminProduit"); exit; }
}
if (isset($_POST["modifier"])) {
    extract($_POST);
    $image = $produit->image;
    if (isset($_FILES["image"]) && !empty($_FILES["image"]["name"][0])) {
        $tmp       = $_FILES["image"]["tmp_name"][0];
        $extension = pathinfo($_FILES["image"]["name"][0], PATHINFO_EXTENSION);
        $image     = uniqid().".".$extension;
        move_uploaded_file($tmp, "images/".$image);
    }
    if (pasvide([$nom, $categorie, $prix, $stock])) {
        if (updateProduit($id, $nom, $categorie, $prix, $stock, $descript, $image)) {
            $message = "Produit modifié avec succès";
            $type    = "success";
            $produit = getProduitsById($id);
        } else {
            $message = "Erreur lors de la modification";
            $type    = "danger";
        }
    } else {
        $message = "Veuillez remplir tous les champs obligatoires";
        $type    = "danger";
    }
}
require_once("views/editProduit.php");
