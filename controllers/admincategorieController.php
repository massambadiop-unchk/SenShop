<?php
if(isset($_GET["delete"])){
    if(deleteCategorie($_GET["delete"])){
        header("Location: ?site=adminCategorie");
        exit;
    }
}
$categories = getAllcategories();
require_once("views/adminCategorie.php");
