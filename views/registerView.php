<?php
require_once ("partials/flash.php");
?>
<section class="ss-register-page mt-5 mb-5">
    <!-- LEFT -->

    <div class="ss-register-left">

        <div class="ss-register-overlay"></div>

        <div class="ss-register-content">

            <div class="ss-register-logo">

                <span>SenShop</span>

            </div>

            <h1>
                Rejoignez la communauté SenShop
            </h1>

            <p>
                Créez votre compte pour commander facilement vos produits préférés partout au Sénégal.
            </p>

            <div class="ss-register-features">

                <!-- ITEM -->

                <div class="ss-register-feature">

                    <div class="ss-feature-icon">

                        <i class="fa-solid fa-truck-fast"></i>

                    </div>

                    <span>Livraison rapide</span>

                </div>

                <!-- ITEM -->

                <div class="ss-register-feature">

                    <div class="ss-feature-icon">

                        <i class="fa-solid fa-shield-heart"></i>

                    </div>

                    <span>Paiement sécurisé</span>

                </div>

                <!-- ITEM -->

                <div class="ss-register-feature">

                    <div class="ss-feature-icon">

                        <i class="fa-solid fa-headset"></i>

                    </div>

                    <span>Support disponible</span>

                </div>

            </div>

        </div>

    </div>

    <!-- RIGHT -->

    <div class="ss-register-right">

        <div class="ss-register-card">

            <!-- TOP -->

            <div class="ss-register-top">

                <h2>Créer un compte</h2>

                <p>
                    Remplissez les informations ci-dessous
                </p>

            </div>

            <!-- FORM -->

            <form action="" method="post"
                class="ss-register-form">

                <div class="ss-register-grid">

                    <!-- PRENOM -->

                    <div class="ss-register-group">

                        <label>Prénom</label>

                        <div class="ss-register-input">

                            <i class="fa-regular fa-user"></i>

                            <input type="text"
                                name="prenom"
                                placeholder="Votre prénom" value="<?= getInputValue('prenom')?>">

                        </div>

                    </div>

                    <!-- NOM -->

                    <div class="ss-register-group">

                        <label>Nom</label>

                        <div class="ss-register-input">

                            <i class="fa-regular fa-user"></i>

                            <input type="text"
                                name="nom"
                                placeholder="Votre nom" value="<?= getInputValue('nom')?>">

                        </div>

                    </div>

                    <!-- TELEPHONE -->

                    <div class="ss-register-group">

                        <label>Téléphone</label>

                        <div class="ss-register-input">

                            <i class="fa-solid fa-phone"></i>

                            <input type="text"
                                name="tel"
                                placeholder="+221 77 123 45 67" pattern="[0-9]+" required  value="<?= getInputValue('tel') ?>">

                        </div>

                    </div>

                    <!-- ADRESSE -->

                    <div class="ss-register-group">

                        <label>Adresse</label>

                        <div class="ss-register-input">

                            <i class="fa-solid fa-location-dot"></i>

                            <input type="text" name="adresse" placeholder="Votre adresse" value="<?= getInputValue('adresse')?>">

                        </div>

                    </div>

                    <!-- EMAIL -->

                    <div class="ss-register-group ss-full">

                        <label>Adresse email</label>

                        <div class="ss-register-input">

                            <i class="fa-regular fa-envelope"></i>

                            <input type="email"
                                name="email"
                                placeholder="exemple@gmail.com" value="<?= getInputValue('email')?>">

                        </div>

                    </div>

                    <!-- PASSWORD -->

                    <div class="ss-register-group ss-full">

                        <label>Mot de passe</label>

                        <div class="ss-register-input">

                            <i class="fa-solid fa-lock"></i>

                            <input type="password"
                                name="mdp"
                                placeholder="Créer un mot de passe">

                        </div>

                    </div>

                </div>

                <!-- CHECKBOX -->

                <!-- BUTTON -->

                <button type="submit"
                    class="ss-register-btn" name="ajouter">

                    <i class="fa-solid fa-user-plus"></i>

                    Créer mon compte

                </button>

            </form>

            <!-- LOGIN -->

            <div class="ss-register-login">

                Vous avez déjà un compte ?

                <a href="?page=login">
                    Se connecter
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