<?php
$message = "";
$type    = "danger";

if(isset($_POST["connecter"])){
    extract($_POST);

    if(pasvide([$email, $mdp])){
        $user = connecter($email, $mdp);

        if($user){
            $_SESSION["user"] = $user;
            if($user->role == "admin"){
                header("Location: ?site=dashboard");
                exit();
            } else {
                header("Location: index.php");
                exit();
            }
        } else {
            $message = "Email ou mot de passe incorrect. Veuillez réessayer.";
            $type    = "danger";
        }
    } else {
        $message = "Veuillez saisir votre email et votre mot de passe.";
        $type    = "danger";
    }
}

require_once("views/loginView.php");
