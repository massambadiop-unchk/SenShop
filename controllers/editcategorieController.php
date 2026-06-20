<?php
$categorie = null;
if (isset($_GET["id"])) {
    $categorie = getCategorieById($_GET["id"]);
    if (!$categorie) { header("Location: ?site=adminCategorie"); exit; }
}
if (isset($_POST["modifier"])) {
    extract($_POST);
    if (pasvide([$nom])) {
        if (updateCategorie($id, $nom, $descript)) {
            $message = "Catégorie modifiée avec succès";
            $type    = "success";
            $categorie = getCategorieById($id);
        } else {
            $message = "Erreur lors de la modification";
            $type    = "danger";
        }
    } else {
        $message = "Le nom est obligatoire";
        $type    = "danger";
    }
}
require_once("views/editCategorie.php");
