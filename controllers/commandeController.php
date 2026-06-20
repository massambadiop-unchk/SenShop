<?php
$produit = null;
if(isset($_GET["id"])){
    $produit = getProduitsById($_GET["id"]);
}
if(!$produit){
    header("Location: index.php");
    exit;
}
if(isset($_POST["commander"])){
    extract($_POST);
    if(pasvide([$prenom, $nom, $telephone, $adresse])){
        if(passerCommande($produit->id, $quantite, $prenom, $nom, $telephone, $adresse, $ville, $region, $repere)){
            $message = "Votre commande a bien été enregistrée ! Nous vous contacterons sous peu.";
            $type    = "success";
        } else {
            $message = "Une erreur est survenue. Veuillez réessayer.";
            $type    = "danger";
        }
    } else {
        $message = "Veuillez remplir tous les champs obligatoires (prénom, nom, téléphone, adresse).";
        $type    = "danger";
    }
}
    // Controller Commande - Meissa Ismaila Top - L3 IDA UNCHK Groupe 67 2025
→ Message de commit à écrire :
require_once("views/commandeView.php");
