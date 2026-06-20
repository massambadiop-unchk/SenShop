<?php
require_once("partials/flash.php"); ?>

<section class="ss-login-page mt-5 mb-5">

    <!-- LEFT SIDE -->

    <div class="ss-login-left">

        <div class="ss-login-overlay"></div>

        <div class="ss-login-content">

            <!-- LOGO -->

            <div class="ss-login-logo">

                <i class="fa-solid fa-bag-shopping"></i>

                <span>SenShop</span>

            </div>

            <!-- TEXT -->

            <h1>
                Connectez-vous à votre compte
            </h1>

            <p>
                Retrouvez vos commandes, vos produits favoris et profitez d'une expérience rapide et sécurisée avec SenShop.
            </p>

            <!-- FEATURES -->

            <div class="ss-login-features">

                <!-- ITEM -->

                <div class="ss-login-feature">

                    <div class="ss-login-feature-icon">

                        <i class="fa-solid fa-lock"></i>

                    </div>

                    <span>Connexion sécurisée</span>

                </div>

                <!-- ITEM -->

                <div class="ss-login-feature">

                    <div class="ss-login-feature-icon">

                        <i class="fa-solid fa-credit-card"></i>

                    </div>

                    <span>Paiement fiable</span>

                </div>

                <!-- ITEM -->

                <div class="ss-login-feature">

                    <div class="ss-login-feature-icon">

                        <i class="fa-solid fa-truck-fast"></i>

                    </div>

                    <span>Livraison rapide</span>

                </div>

            </div>

        </div>

    </div>

    <!-- RIGHT SIDE -->

    <div class="ss-login-right">

        <!-- CARD -->

        <div class="ss-login-card">

            <!-- TOP -->

            <div class="ss-login-top">

                <h2>Bon retour 👋</h2>

                <p>
                    Connectez-vous à votre compte SenShop
                </p>

            </div>

            <!-- FORM -->

            <form action="" method="post"
            class="ss-login-form">

                <!-- EMAIL -->

                <div class="ss-login-group">

                    <label>Adresse email</label>

                    <div class="ss-login-input">

                        <i class="fa-regular fa-envelope"></i>

                        <input type="email"
                        name="email"
                        placeholder="exemple@gmail.com">

                    </div>

                </div>

                <!-- PASSWORD -->

                <div class="ss-login-group">

                    <div class="ss-login-label-row">

                        <label>Mot de passe</label>

                        <a href="?page=register">

                            Mot de passe oublié ?

                        </a>

                    </div>

                    <div class="ss-login-input">

                        <i class="fa-solid fa-lock"></i>

                        <input type="password"
                        name="mdp"
                        placeholder="Entrer votre mot de passe">

                    </div>

                </div>

                <!-- CHECK -->

                <!-- BUTTON -->

                <button type="submit"
                class="ss-login-btn" name="connecter">

                    <i class="fa-solid fa-right-to-bracket"></i>

                    Se connecter

                </button>

            </form>

            <!-- DIVIDER -->

            <div class="ss-login-divider">

                <span>ou continuer avec</span>

            </div>

            <!-- SOCIAL -->

            <!-- REGISTER -->

            <div class="ss-login-register">

                Vous n'avez pas de compte ?

                <a href="?page=register">

                    Créer un compte

                </a>

            </div>

        </div>

    </div>

</section>
<script>

document.querySelectorAll('.ss-alert-close').forEach(button => {

    button.addEventListener('click', function(){

        const alert = this.closest('.ss-custom-alert');

        alert.style.opacity = '0';
        alert.style.transform = 'translateY(-10px)';

        setTimeout(() => {

            alert.style.display = 'none';

        }, 300);

    });

});

</script>
// Page Connexion - Developpee par Marie Sow Thiam - L3 IDA UNCHK Groupe 67 2025
