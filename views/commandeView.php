<!-- =======================================================
PAGE COMMANDE SENSHOP
======================================================= -->

<section class="commande-page">

    <div class="container">

        <!-- BREADCRUMB -->

        <div class="breadcrumb-box">

            <a href="index.php">Accueil</a>

            <i class="bi bi-chevron-right"></i>

            <a href="?page=beautesante">Beauté & Santé</a>

            <i class="bi bi-chevron-right"></i>

            <span><?= htmlspecialchars($produit->nom) ?></span>

        </div>

        <!-- PRODUIT -->

        <div class="commande-product">

            <!-- GALERIE -->

            <div class="product-gallery">

                <div class="gallery-thumbs">

                    <img src="images/<?= htmlspecialchars($produit->image) ?>" class="active-thumb">

                    <img src="images/<?= htmlspecialchars($produit->image) ?>">

                    <img src="images/<?= htmlspecialchars($produit->image) ?>">

                    <img src="images/<?= htmlspecialchars($produit->image) ?>">

                </div>

                <div class="main-product-image">

                    <img src="images/<?= htmlspecialchars($produit->image) ?>" id="mainImage">

                </div>

            </div>

            <!-- INFOS -->

            <div class="product-info">

                <span class="product-badge">
                    Nouveau
                </span>

                <h1>
                    <?= htmlspecialchars($produit->nom) ?>
                </h1>

                <div class="product-rating">

                    <div class="stars">

                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>

                    </div>

                    <span>4.8 (128 avis)</span>

                </div>

                <div class="product-price" id="productPrice">

                    <?= number_format($produit->prix, 0, ',', '.') ?> FCFA

                </div>

                <p class="product-desc">

                    <?= htmlspecialchars($produit->descript) ?>

                </p>

                <!-- BADGES -->


                <!-- QUANTITE -->

                <div class="quantity-wrapper">

                    <h4>Quantité</h4>

                    <div class="quantity-box">

                        <button type="button" id="minusBtn">

                            <i class="bi bi-dash"></i>

                        </button>

                        <input type="text" value="1" id="quantityInput" readonly>

                        <button type="button" id="plusBtn">

                            <i class="bi bi-plus"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>

        <!-- SECTION COMMANDE -->

        <div class="commande-wrapper">

            <!-- FORMULAIRE -->

            <div class="commande-form">

                <div class="section-title">

                    <h2>
                        Passer la commande
                    </h2>

                    <p>
                        Remplissez vos informations pour recevoir votre commande.
                    </p>

                </div>

                <?php require_once("partials/flash.php"); ?>

                <form method="POST" action="?page=commande&id=<?= $produit->id ?>">

                    <input type="hidden" name="quantite" id="quantiteHidden" value="1">

                    <div class="form-grid">
                        <div class="input-box">
                            <label>Prénom <span style="color:#ef4444">*</span></label>
                            <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
                        </div>
                        <div class="input-box">
                            <label>Nom <span style="color:#ef4444">*</span></label>
                            <input type="text" name="nom" placeholder="Entrez votre nom" required>
                        </div>
                    </div>

                    <div class="input-box">
                        <label>Téléphone <span style="color:#ef4444">*</span></label>
                        <input type="tel" name="telephone" placeholder="+221 77 123 45 67" required>
                    </div>

                    <div class="input-box">
                        <label>Adresse complète <span style="color:#ef4444">*</span></label>
                        <input type="text" name="adresse" placeholder="Numéro, rue, quartier..." required>
                    </div>

                    <div class="form-grid">
                        <div class="input-box">
                            <label>Ville / Commune</label>
                            <input type="text" name="ville" placeholder="Votre ville">
                        </div>
                        <div class="input-box">
                            <label>Région</label>
                            <select name="region">
                                <option value="Dakar">Dakar</option>
                                <option value="Thiès">Thiès</option>
                                <option value="Saint-Louis">Saint-Louis</option>
                                <option value="Kaolack">Kaolack</option>
                                <option value="Ziguinchor">Ziguinchor</option>
                                <option value="Diourbel">Diourbel</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-box">
                        <label>Point de repère</label>
                        <textarea name="repere" placeholder="Mosquée, pharmacie, école..."></textarea>
                    </div>

                    <!-- MODE PAIEMENT -->
                    <div class="payment-box">
                        <div class="payment-icon">
                            <i class="bi bi-cash-stack"></i>
                        </div>
                        <div>
                            <h4>Paiement à la livraison</h4>
                            <p>Vous payez en espèces à la réception.</p>
                        </div>
                    </div>

                    <button type="submit" name="commander" class="commande-btn">
                        <i class="bi bi-lock"></i>
                        Confirmer ma commande
                    </button>

                </form>

            </div>

            <!-- RESUME -->

            <div class="commande-summary">

                <h3>Votre commande</h3>

                <div class="summary-product">

                    <img src="images/<?= htmlspecialchars($produit->image) ?>">

                    <div>

                        <h4><?= htmlspecialchars($produit->nom) ?></h4>

                        <span>Réf. #<?= $produit->id ?></span>

                    </div>

                    <strong id="summaryPrice"><?= number_format($produit->prix, 0, ',', '.') ?> FCFA</strong>

                </div>

                <div class="summary-total">

                    <div>

                        <span>Sous-total</span>

                        <strong id="subtotalPrice"><?= number_format($produit->prix, 0, ',', '.') ?> FCFA</strong>

                    </div>

                    <div>

                        <span>Livraison</span>

                        <strong>Gratuite</strong>

                    </div>

                </div>

                <div class="final-total">

                    <span>Total à payer</span>

                    <h2 id="totalPrice"><?= number_format($produit->prix, 0, ',', '.') ?> FCFA</h2>

                </div>

                <!-- AVANTAGES -->

                <div class="summary-benefits">

                    <div>

                        <i class="bi bi-truck"></i>

                        <span>Livraison rapide</span>

                    </div>

                    <div>

                        <i class="bi bi-cash"></i>

                        <span>Paiement à la livraison</span>

                    </div>

                    <div>

                        <i class="bi bi-shield-check"></i>

                        <span>Satisfait ou remboursé</span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<script>
const prix = <?= $produit->prix ?>;
const plusBtn      = document.getElementById("plusBtn");
const minusBtn     = document.getElementById("minusBtn");
const qtyInput     = document.getElementById("quantityInput");
const qtyHidden    = document.getElementById("quantiteHidden");
const summaryPrice = document.getElementById("summaryPrice");
const subtotalPrice= document.getElementById("subtotalPrice");
const totalPrice   = document.getElementById("totalPrice");
const productPrice = document.getElementById("productPrice");

function formatPrix(n){
    return n.toLocaleString("fr-FR") + " FCFA";
}

function updatePrix(){
    const q = parseInt(qtyInput.value);
    productPrice.textContent  = formatPrix(prix * q);
    summaryPrice.textContent  = formatPrix(prix * q);
    subtotalPrice.textContent = formatPrix(prix * q);
    totalPrice.textContent    = formatPrix(prix * q);
    qtyHidden.value = q;
}

if(plusBtn) {
    plusBtn.addEventListener("click", () => {
        let q = parseInt(qtyInput.value);
        if(q < <?= $produit->stock ?>) { qtyInput.value = q + 1; updatePrix(); }
    });
}
if(minusBtn) {
    minusBtn.addEventListener("click", () => {
        let q = parseInt(qtyInput.value);
        if(q > 1) { qtyInput.value = q - 1; updatePrix(); }
    });
}
</script>
// Page Commande - Developpee par Meissa Ismaila Top - L3 IDA UNCHK Groupe 67 2025
