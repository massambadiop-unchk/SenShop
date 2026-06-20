<?php
$message = "";
$type    = "danger";

if(isset($_POST["ajouter"])){
    extract($_POST);
    if(pasvide([$prenom, $nom, $tel, $adresse, $email, $mdp])){
        if(ajoutCompte($prenom, $nom, $tel, $adresse, $email, $mdp)){
            $message = "Votre compte a été créé avec succès ! Vous pouvez maintenant vous connecter.";
            $type    = "success";
        } else {
            $message = "Une erreur est survenue. Cet email est peut-être déjà utilisé.";
            $type    = "danger";
        }
    } else {
        $message = "Veuillez remplir tous les champs obligatoires.";
        $type    = "danger";
    }
}

require_once("views/registerView.php");
