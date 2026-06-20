<div class="top-bar">

    <div>
        <i class="bi bi-truck"></i>
        Livraison gratuite dès 50.000 FCFA
    </div>

    <div>
        <i class="bi bi-credit-card"></i>
        Paiement à la livraison
    </div>

    <div>
        <i class="bi bi-shield-check"></i>
        Satisfait ou remboursé 7 jours
    </div>

</div>

<!-- =====================================================
BARRE DE NAVIGATION
===================================================== -->

<nav class="navbar navbar-expand-lg custom-navbar">

    <div class="container">

        <a class="navbar-brand logo" href="index.php">
            SenShop
        </a>

        <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse"
            id="navbarNav">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="index.php">
                        Accueil
                    </a>
                </li>


                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                        href="?page=categorie"
                        data-bs-toggle="dropdown">

                        Catégories

                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item" href="?page=beautesante">
                                Beauté & Santé
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="?page=beautesante">
                                Mode Homme
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="?page=beautesante">
                                Mode Femme
                            </a>
                        </li>

                    </ul>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?page=apropos">
                        Apropos
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="?page=contact">
                        Contact
                    </a>
                </li>

            </ul>

            <div class="nav-icons">
            <?php if (isset($_SESSION["user"])) { ?>
             <li class="nav-item dropdown" style="list-style-type: none">
                
                    <a class="nav-link dropdown-toggle"
                        href="#"
                        data-bs-toggle="dropdown">
                      <i class="bi bi-person"></i>
                        <?= $_SESSION["user"]->prenom . " " . $_SESSION["user"]->nom ?>

                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item" href="?page=login">
                                Mon compte
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="?page=logout">
                                Deconnexion
                            </a>
                        </li>


                    </ul>

                </li>
                <?php } else { ?>
                 <li class="nav-item dropdown" style="list-style-type: none">
                
                    <a class="nav-link dropdown-toggle"
                        href="#"
                        data-bs-toggle="dropdown">
                      <i class="bi bi-person"></i>
                        Mon compte

                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="?page=login">
                                Connexion
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="?page=register">
                                Inscription
                            </a>
                        </li>


                    </ul>

                </li>
                <?php } ?>


                <a href="?page=panier" style="text-decoration:none; color:inherit;">
                <div class="cart-icon">
                    <i class="bi bi-bag"></i>
                    <span class="cart-count">
                        <?php
                        $nb = 0;
                        if(isset($_SESSION['panier'])){
                            foreach($_SESSION['panier'] as $item){ $nb += $item['quantite']; }
                        }
                        echo $nb;
                        ?>
                    </span>
                </div>
                </a>

            </div>

        </div>

    </div>

</nav>
// Navbar publique - Marie Sow Thiam - L3 IDA UNCHK Groupe 67 2025
