    <!-- =====================================================
HERO SECTION
===================================================== -->

    <section class="hero-section">

        <div class="slide">

            <div class="overlay"></div>

            <div class="hero-content">

                <p class="hero-subtitle">
                    Bienvenue sur SenShop
                </p>

                <h1 class="hero-title">
                    Découvrez le meilleur<br>
                    pour vous
                </h1>

                <p class="hero-text">
                    Qualité, style et élégance au meilleur prix.
                </p>

                <div class="hero-buttons">

                    <a href="?page=beautesante"
                        class="btn-dark-custom">

                        Découvrir la boutique

                    </a>

                    <a href="?page=beautesante"
                        class="btn-light-custom">

                        Voir les offres

                    </a>

                </div>

            </div>

            <button class="slider-btn prev-slide">

                <i class="bi bi-chevron-left"></i>

            </button>

            <button class="slider-btn next-slide">

                <i class="bi bi-chevron-right"></i>

            </button>

            <div class="slider-dots">

                <span class="dot active"></span>

                <span class="dot"></span>

                <span class="dot"></span>

            </div>

        </div>

    </section>

    <!-- =====================================================
SERVICES
===================================================== -->

    <section class="services">

        <div class="container">

            <div class="row g-4">

                <div class="col-lg col-md-4 col-6">

                    <div class="service-card">

                        <i class="bi bi-truck"></i>

                        <h6>Livraison gratuite</h6>

                        <p>Dès 50.000 FCFA</p>

                    </div>

                </div>

                <div class="col-lg col-md-4 col-6">

                    <div class="service-card">

                        <i class="bi bi-shield-check"></i>

                        <h6>Garantie</h6>

                        <p>Remboursé 7 jours</p>

                    </div>

                </div>

                <div class="col-lg col-md-4 col-6">

                    <div class="service-card">

                        <i class="bi bi-credit-card"></i>

                        <h6>Paiement sécurisé</h6>

                        <p>100% sécurisé</p>

                    </div>

                </div>

                <div class="col-lg col-md-4 col-6">

                    <div class="service-card">

                        <i class="bi bi-headset"></i>

                        <h6>Support 24/7</h6>

                        <p>Assistance en ligne</p>

                    </div>

                </div>

                <div class="col-lg col-md-4 col-12">

                    <div class="service-card">

                        <i class="bi bi-arrow-counterclockwise"></i>

                        <h6>Retour facile</h6>

                        <p>Retour sous 7 jours</p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- =====================================================
NOUVEAUTES
===================================================== -->

    <section class="products-section" id="nouveau">

        <div class="container" >

            <div class="section-title">

                <h2>Nouveautés</h2>

                <a href="?page=beautesante">
                    Voir tous les produits
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>

            <div class="products-grid">
<?php if(!empty($produits)): ?>
<?php foreach(array_slice($produits, 0, 5) as $p): ?>
                <div class="product-card">
                    <span class="badge-new">Nouveau</span>
                    <img src="images/<?= htmlspecialchars($p->image) ?>" alt="<?= htmlspecialchars($p->nom) ?>">
                    <small><?= htmlspecialchars($p->nom_categorie ?? '') ?></small>
                    <h5><?= htmlspecialchars($p->nom) ?></h5>
                    <div class="price">
                        <span class="new-price"><?= number_format($p->prix, 0, ',', '.') ?> FCFA</span>
                    </div>
                    <div class="product-icons">
                        <a href="?page=commande&id=<?= $p->id ?>" style="text-decoration:none; color:rgb(235,25,25); font-family:'Inter',sans-serif; font-size:16px; font-weight:900;">Acheter Maintenant</a>
                        <a href="?page=panier&ajouter=<?= $p->id ?>"><i class="bi bi-cart"></i></a>
                    </div>
                </div>
<?php endforeach; ?>
<?php endif; ?>
            </div>

        </div>

    </section>

    <!-- =====================================================
VIDEO BANNER
===================================================== -->

  <section class="video-banner">

    <div class="container-fluid">

        <div class="video-banner-wrapper">

            <!-- LEFT -->

            <div class="video-content">

                <p>Notre histoire</p>

                <h2>
                    Qualité, confiance <br>
                    et satisfaction
                </h2>

                <span>
                    SenShop s'engage à vous offrir les meilleurs produits
                    au meilleur prix avec une expérience d'achat unique.
                </span>

                <a href="?page=apropos">
                    En savoir plus
                </a>

            </div>

            <!-- RIGHT -->

            <div class="video-box">

                <video autoplay muted loop playsinline class="banner-video" id="storyVideo">

    <source src="images/Blanc et Vert Fluo Rue YouTube Vignette.mp4" type="video/mp4">

</video>

               <div class="play-btn" id="playPauseBtn">

    <i class="bi bi-pause-fill" id="playIcon"></i>

</div>

            </div>

        </div>

    </div>

</section>

    <!-- =====================================================
MEILLEURES VENTES
===================================================== -->

    <section class="products-section best-sales" id="vente">

        <div class="container">

            <div class="section-title">

                <h2>Meilleures ventes</h2>

                <a href="?page=beautesante">
                    Voir tous les produits
                </a>

            </div>

            <div class="products-grid">

                <div class="product-card">

                    <img src="images/PR3.png" alt="">

                    <small>Sacs</small>

                    <h5>Sac à main élégant</h5>

                    <div class="price">

                        <span class="new-price">32.900 FCFA</span>

                    </div>

                    <div class="product-icons">

                           <a href="?page=beautesante" style="text-decoration: none; color: rgb(235, 25, 25); font-family:'Inter',sans-serif; font-size:16px; font-weight:900;">Acheter Maintenant</a>

                        <i class="bi bi-cart"></i>

                    </div>

                </div>

                <div class="product-card">

                    <img src="images/P1R.png" alt="">

                    <small>Accessoires</small>

                    <h5>Montre Luxe</h5>

                    <div class="price">

                        <span class="new-price">22.900 FCFA</span>

                    </div>

                    <div class="product-icons">

                           <a href="?page=beautesante" style="text-decoration: none; color: rgb(235, 25, 25); font-family:'Inter',sans-serif; font-size:16px; font-weight:900;">Acheter Maintenant</a>

                        <i class="bi bi-cart"></i>

                    </div>

                </div>

                <div class="product-card">

                    <img src="images/PR6.png" alt="">

                    <small>Beauté</small>

                    <h5>Parfum Premium</h5>

                    <div class="price">

                        <span class="new-price">21.900 FCFA</span>

                    </div>

                    <div class="product-icons">

                           <a href="?page=beautesante" style="text-decoration: none; color: rgb(235, 25, 25); font-family:'Inter',sans-serif; font-size:16px; font-weight:900;">Acheter Maintenant</a>

                        <i class="bi bi-cart"></i>

                    </div>

                </div>

                <div class="product-card">

                    <img src="images/PR2.png" alt="">

                    <small>Chaussures</small>

                    <h5>Baskets Urbaines</h5>

                    <div class="price">

                        <span class="new-price">27.900 FCFA</span>

                    </div>

                    <div class="product-icons">

                           <a href="?page=beautesante" style="text-decoration: none; color: rgb(235, 25, 25); font-family:'Inter',sans-serif; font-size:16px; font-weight:900;">Acheter Maintenant</a>

                        <i class="bi bi-cart"></i>

                    </div>

                </div>

                <div class="product-card">

                    <img src="images/PR4.png" alt="">

                    <small>Électronique</small>

                    <h5>Écouteurs Pro</h5>

                    <div class="price">

                        <span class="new-price">17.900 FCFA</span>

                    </div>

                    <div class="product-icons">

                           <a href="?page=beautesante" style="text-decoration: none; color: rgb(235, 25, 25); font-family:'Inter',sans-serif; font-size:16px; font-weight:900;">Acheter Maintenant</a>

                        <i class="bi bi-cart"></i>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- =====================================================
VIDEO SECTION
===================================================== -->

   <section class="discover-video">

    <div class="container">

        <div class="discover-box">

            <!-- VIDEO -->

            <video autoplay muted loop playsinline class="discover-banner-video" id="discoverVideo">

                <source src="images/Blanc et Vert Fluo Rue YouTube Vignette.mp4" type="video/mp4">

            </video>

            <!-- OVERLAY -->

            <div class="discover-overlay">

                <h2>Découvrez nos produits en vidéo</h2>

                <button id="discoverPlayBtn">

                    <i class="bi bi-pause-fill" id="discoverIcon"></i>

                </button>

            </div>

        </div>

    </div>

</section>

    <!-- =====================================================
TEMOIGNAGES
===================================================== -->

    <section class="testimonials" id="temoignage">

        <div class="container">

            <h2>Ce que disent nos clients</h2>

            <div class="testimonial-grid">

                <div class="testimonial-card">

                    <div class="stars">
                        ★★★★★
                    </div>

                    <p>
                        Produits de qualité et livraison rapide.
                    </p>

                    <h5>Aminata D.</h5>

                </div>

                <div class="testimonial-card">

                    <div class="stars">
                        ★★★★★
                    </div>

                    <p>
                        J'ai trouvé tout ce dont j'avais besoin.
                    </p>

                    <h5>Moussa T.</h5>

                </div>

                <div class="testimonial-card">

                    <div class="stars">
                        ★★★★★
                    </div>

                    <p>
                        Service client excellent et très rapide.
                    </p>

                    <h5>Khadija B.</h5>

                </div>

            </div>

        </div>

    </section>

    <!-- =====================================================
NEWSLETTER
===================================================== -->

    <section class="newsletter">

        <div class="container">

            <div class="newsletter-box">

                <div>

                    <h3>
                        Inscrivez-vous et recevez 10% de réduction
                    </h3>

                    <p>
                        Soyez informés des nouveautés et offres exclusives.
                    </p>

                </div>

                <div id="newsletter-flash" style="width:100%; margin-bottom:10px;"></div>

                <form>

                    <input type="email"
                        placeholder="Votre adresse email">

                    <button type="submit">
                        S'inscrire
                    </button>

                </form>

            </div>

        </div>

    </section>< ! - -   P a g e   A c c u e i l   -   D e v e l o p p e e   p a r   M a s s a m b a   D i o p   -   L 3   I D A   U N C H K   G r o u p e   6 7   2 0 2 5   - - >  
 