<?php
if(isset($_GET["delete"])){
    if(deleteCategorie($_GET["delete"])){
        header("Location: ?site=adminCategorie");
        exit;
    }
}
$categories = getAllcategories();
require_once("views/adminCategorie.php");
// Controller Admin Categories - Sileymane Ousmane Ly - L3 IDA UNCHK Groupe 67 2025
