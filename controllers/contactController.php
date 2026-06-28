<?php
if(isset($_POST["envoyer"])){
    $nom       = $_POST["nom"] ?? '';
    $email     = $_POST["email"] ?? '';
    $telephone = $_POST["telephone"] ?? '';
    $sujet     = $_POST["sujet"] ?? '';
    $msg       = $_POST["message"] ?? '';

    if(pasvide([$nom, $email, $msg])){
        if(envoyerMessage($nom, $email, $telephone, $sujet, $msg)){
            $message = "Votre message a bien été envoyé. Nous vous répondrons rapidement.";
            $type    = "success";
        } else {
            $message = "Une erreur est survenue. Veuillez réessayer.";
            $type    = "danger";
        }
    } else {
        $message = "Veuillez remplir les champs obligatoires (nom, email, message).";
        $type    = "danger";
    }
}
require_once("views/contactView.php");
// Controller Contact - Meissa Ismaila Top - L3 IDA UNCHK Groupe 67 2025

