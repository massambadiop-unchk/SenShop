<?php
session_start();

ob_start();

include_once("models/database.php");
include_once("models/fonctions.php");

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

if (isset($_SESSION["user"]) && $_SESSION["user"]->role == "admin") {
    require_once("themes/navbar.php");

    if (isset($_GET["site"])) {

        switch ($_GET["site"]) {

            case 'dashboard':
                include_once("controllers/dashboardController.php");
                break;
            case 'logout':
                include_once("controllers/logoutController.php");
                break;
            case 'ajoutProduit':
                include_once("controllers/ajoutproduitController.php");
                break;
            case 'ajoutCategorie':
                include_once("controllers/ajoutcategorieController.php");
                break;
            case 'adminCategorie':
                include_once("controllers/admincategorieController.php");
                break;
            case 'adminProduit':
                include_once("controllers/adminproduitController.php");
                break;
            case 'adminClient':
                include_once("controllers/adminclientController.php");
                break;
            case 'adminCommande':
                include_once("controllers/admincommandeController.php");
                break;
            case 'editCategorie':
                include_once("controllers/editcategorieController.php");
                break;
            case 'editProduit':
                include_once("controllers/editproduitController.php");
                break;

            default:
                include_once("controllers/dashboardController.php");
                break;
        }

    } else {
        include_once("controllers/dashboardController.php");
    }

    require_once("themes/footer.php");
}

/*
|--------------------------------------------------------------------------
| PAGES PUBLIQUES
|--------------------------------------------------------------------------
*/

else {

    include_once("partials/entete.php");

    if (isset($_GET["page"])) {

        switch ($_GET["page"]) {

            case 'login':
                require_once("controllers/loginController.php");
                break;
            case 'logout':
                require_once("controllers/clientLogOut.php");
                break;
            case 'register':
                require_once("controllers/registerController.php");
                break;
            case 'apropos':
                require_once("views/aproposView.php");
                break;
            case 'contact':
                require_once("controllers/contactController.php");
                break;
            case 'beautesante':
                require_once("controllers/beauteSanteController.php");
                break;
            case 'commande':
                require_once("controllers/commandeController.php");
                break;
            case 'panier':
                require_once("controllers/panierController.php");
                break;

            default:
                require_once("controllers/homeController.php");
                break;
        }

    } else {
        require_once("controllers/homeController.php");
    }

    require_once("partials/pied.php");
}

ob_end_flush();
?>
