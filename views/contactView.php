


<section class="contact-page-section">

    <div class="container">

        <div class="contact-page-wrapper">

            <!-- LEFT SIDE -->

            <div class="contact-page-left">

                <img src="images/etudiant.png" alt="">

                <div class="contact-left-overlay"></div>

                <div class="contact-left-content">

                    <h1>
                        Contactez
                        <span>SenShop</span>
                    </h1>

                    <p>
                        Une équipe disponible
                        pour vous accompagner.
                    </p>

                    <a href="#contactForm">

                        <i class="bi bi-send"></i>

                        Envoyer un message

                    </a>

                </div>

            </div>

            <!-- RIGHT SIDE -->

            <div class="contact-page-right" id="contactForm">

                <div class="contact-badge">

                    <i class="bi bi-headset"></i>

                    Support 24/7

                </div>

                <h2>Parlons de votre besoin</h2>

                <p>
                    Notre équipe vous répond rapidement pour toute
                    question concernant vos commandes, produits
                    ou collaborations.
                </p>

                <?php require_once("partials/flash.php"); ?>

                <form method="POST" action="?page=contact">

                    <div class="contact-two-fields">
                        <div class="contact-input-box">
                            <input type="text" name="nom" placeholder="Nom complet" required>
                        </div>
                        <div class="contact-input-box">
                            <input type="email" name="email" placeholder="Adresse email" required>
                        </div>
                    </div>

                    <div class="contact-input-box">
                        <input type="text" name="telephone" placeholder="Téléphone">
                    </div>

                    <div class="contact-input-box">
                        <select name="sujet">
                            <option value="">Sujet</option>
                            <option value="Commande">Commande</option>
                            <option value="Livraison">Livraison</option>
                            <option value="Paiement">Paiement</option>
                            <option value="Partenariat">Partenariat</option>
                        </select>
                    </div>

                    <div class="contact-input-box">
                        <textarea name="message" placeholder="Votre message" required></textarea>
                    </div>

                    <button type="submit" name="envoyer" class="contact-submit-btn">
                        <i class="bi bi-send"></i>
                        Envoyer le message
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
CONTACT INFOS
========================================================= -->

<section class="contact-info-section">

    <div class="container">

        <div class="contact-info-wrapper">

            <!-- CARD -->

            <div class="contact-info-card">

                <div class="contact-info-icon">

                    <i class="bi bi-telephone"></i>

                </div>

                <div>

                    <h4>Téléphone</h4>

                    <h5>+221 78 123 45 67</h5>

                    <span>Lun - Ven : 8h - 18h</span>

                </div>

            </div>

            <!-- CARD -->

            <div class="contact-info-card">

                <div class="contact-info-icon">

                    <i class="bi bi-geo-alt"></i>

                </div>

                <div>

                    <h4>Adresse</h4>

                    <h5>Dakar, Sénégal</h5>

                    <span>Zone B, Sacré-Cœur 3</span>

                </div>

            </div>

            <!-- CARD -->

            <div class="contact-info-card">

                <div class="contact-info-icon">

                    <i class="bi bi-envelope"></i>

                </div>

                <div>

                    <h4>Email</h4>

                    <h5>contact@senshop.sn</h5>

                    <span>Nous vous répondons vite</span>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
FAQ SECTION
========================================================= -->

<section class="contact-faq-section">

    <div class="container">

        <div class="contact-faq-wrapper">

            <!-- LEFT -->

            <div class="contact-faq-left">

                <h2>
                    Questions
                    <span>fréquentes</span>
                </h2>

                <div class="contact-faq-line"></div>

            </div>

            <!-- RIGHT -->

            <div class="contact-faq-right">

                <!-- ITEM -->

                <div class="faq-item active">

                    <div class="faq-question">

                        <div class="faq-question-left">

                            <div class="faq-icon">

                                <i class="bi bi-truck"></i>

                            </div>

                            <div>

                                <h4>Livraison</h4>

                                <p>
                                    Livraison rapide partout au Sénégal.
                                </p>

                            </div>

                        </div>

                        <i class="bi bi-plus-lg faq-toggle"></i>

                    </div>

                    <div class="faq-answer">

                        Nous livrons vos commandes sous 24h à 72h
                        selon votre localisation au Sénégal.

                    </div>

                </div>

                <!-- ITEM -->

                <div class="faq-item">

                    <div class="faq-question">

                        <div class="faq-question-left">

                            <div class="faq-icon">

                                <i class="bi bi-credit-card"></i>

                            </div>

                            <div>

                                <h4>Paiement</h4>

                                <p>
                                    Paiement à la livraison disponible.
                                </p>

                            </div>

                        </div>

                        <i class="bi bi-plus-lg faq-toggle"></i>

                    </div>

                    <div class="faq-answer">

                        Vous pouvez payer à la réception
                        de votre commande en toute sécurité.

                    </div>

                </div>

                <!-- ITEM -->

                <div class="faq-item">

                    <div class="faq-question">

                        <div class="faq-question-left">

                            <div class="faq-icon">

                                <i class="bi bi-arrow-repeat"></i>

                            </div>

                            <div>

                                <h4>Retours</h4>

                                <p>
                                    Retour possible sous 7 jours.
                                </p>

                            </div>

                        </div>

                        <i class="bi bi-plus-lg faq-toggle"></i>

                    </div>

                    <div class="faq-answer">

                        Si un produit présente un problème,
                        vous pouvez demander un échange ou un retour.

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
SOCIALS
========================================================= -->

<section class="contact-social-section">

    <div class="container">

        <div class="contact-social-wrapper">

            <!-- LEFT -->

            <div class="contact-social-title">

                <h2>
                    Suivez-nous sur
                    nos <span>réseaux sociaux</span>
                </h2>

            </div>

            <!-- SOCIALS -->

            <div class="contact-social-cards">

                <!-- CARD -->

                <a href="https://facebook.com" target="_blank" class="social-contact-card">

                    <div class="social-contact-icon facebook">

                        <i class="bi bi-facebook"></i>

                    </div>

                    <h4>Facebook</h4>

                    <span>@senshop.sn</span>

                </a>

                <!-- CARD -->

                <a href="https://instagram.com" target="_blank" class="social-contact-card">

                    <div class="social-contact-icon instagram">

                        <i class="bi bi-instagram"></i>

                    </div>

                    <h4>Instagram</h4>

                    <span>@senshop.sn</span>

                </a>

                <!-- CARD -->

                <a href="https://tiktok.com" target="_blank" class="social-contact-card">

                    <div class="social-contact-icon tiktok">

                        <i class="bi bi-tiktok"></i>

                    </div>

                    <h4>TikTok</h4>

                    <span>@senshop.sn</span>

                </a>

                <!-- CARD -->

                <a href="https://wa.me/221781238766" target="_blank" class="social-contact-card">

                    <div class="social-contact-icon whatsapp">

                        <i class="bi bi-whatsapp"></i>

                    </div>

                    <h4>WhatsApp</h4>

                    <span>+221 78 123 45 67</span>

                </a>

            </div>

        </div>

    </div>

</section>

