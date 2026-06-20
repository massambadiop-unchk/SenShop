<?php
if(isset($_GET["delete"])){
    if(deleteCommande($_GET["delete"])){
        header("Location: ?site=adminCommande");
        exit;
    }
}
$commandes = getAllCommandes();
require_once("views/admincommande.php");
// Controller Admin Commandes - Thierno Souleymane Diallo - L3 IDA UNCHK Groupe 67 2025
