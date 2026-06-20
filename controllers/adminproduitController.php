<?php
if(isset($_GET["delete"])){
    if(deleteProduit($_GET["delete"])){
        header("Location: ?site=adminProduit");
        exit;
    }
}
$produits = getAllproduits();
require_once("views/adminProduit.php");
