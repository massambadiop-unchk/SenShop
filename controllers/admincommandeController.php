<?php
if(isset($_GET["delete"])){
    if(deleteCommande($_GET["delete"])){
        header("Location: ?site=adminCommande");
        exit;
    }
}
$commandes = getAllCommandes();
require_once("views/admincommande.php");
