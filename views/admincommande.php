
<!-- ════════════════════════════════════════
     TABLEAU CATÉGORIES SIMPLIFIÉ
════════════════════════════════════════ -->

<!-- ════════════════════════════════════════
     PAGE COMMANDES
════════════════════════════════════════ -->

<div class="ss-orders-page">

    <!-- HEADER -->

    <div class="ss-orders-header">

        <div>

            <h1>Commandes</h1>

            <p>
                Gérez toutes les commandes de votre boutique.
            </p>

        </div>

        <button class="ss-export-orders-btn">

            <i class="fa-solid fa-download"></i>

            Exporter

        </button>

    </div>

    <!-- STATS -->

    <!-- TABLE CARD -->

    <div class="ss-orders-card">

        <!-- FILTERS -->

        <div class="ss-orders-filters">

            <!-- SEARCH -->

            <div class="ss-orders-search">

                <i class="fa-solid fa-magnifying-glass"></i>

                <input type="text"
                placeholder="Rechercher une commande...">

            </div>


            <button class="ss-reset-orders-btn">

                <i class="fa-solid fa-rotate-left"></i>

                Réinitialiser

            </button>

        </div>

        <!-- TABLE -->

        <div class="ss-orders-table-wrapper">

            <table class="ss-orders-table">

                <thead>

                    <tr>

                        <th>Commande</th>

                        <th>Produit</th>

                        <th>Catégorie</th>

                        <th>Quantité</th>

                        <th>Prix</th>

                        <th>Client</th>

                        <th>Email / Téléphone</th>

                        <th>Date</th>

                        <th>Actions</th>

                    </tr>

                </thead>

                <tbody>
<?php if(empty($commandes)): ?>
    <tr><td colspan="9" style="text-align:center; padding:40px; color:#9ca3af;">Aucune commande pour le moment.</td></tr>
<?php else: ?>
    <?php foreach($commandes as $c): ?>
    <tr>
        <td><div class="ss-order-id">#SEN<?= str_pad($c->id, 4, '0', STR_PAD_LEFT) ?></div></td>
        <td>
            <div class="ss-order-product">
                <img src="images/<?= htmlspecialchars($c->produit_image) ?>">
                <div><h4><?= htmlspecialchars($c->produit_nom) ?></h4><p><?= number_format($c->produit_prix, 0, ',', '.') ?> FCFA</p></div>
            </div>
        </td>
        <td><?= htmlspecialchars($c->categorie_nom) ?></td>
        <td>x<?= $c->quantite ?></td>
        <td><?= number_format($c->produit_prix * $c->quantite, 0, ',', '.') ?> FCFA</td>
        <td>
            <div class="ss-order-client">
                <div class="ss-client-avatar"><?= strtoupper(mb_substr($c->prenom, 0, 1)) ?></div>
                <div><h4><?= htmlspecialchars($c->prenom.' '.$c->nom) ?></h4><p><?= htmlspecialchars($c->ville) ?></p></div>
            </div>
        </td>
        <td><?= htmlspecialchars($c->adresse) ?> / <?= htmlspecialchars($c->telephone) ?></td>
        <td><?= date("d M Y", strtotime($c->date_commande)) ?></td>
        <td>
            <a href="?site=adminCommande&delete=<?= $c->id ?>" onclick="return confirm('Supprimer ?')">
                <button class="ss-order-btn ss-delete-order"><i class="fa-solid fa-trash"></i></button>
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
<?php endif; ?>
                </tbody>

            </table>

        </div>

        <!-- FOOTER -->

        <div class="ss-orders-footer">

            <p>

                Affichage de 1 à 2 sur 128 commandes

            </p>

            <!-- PAGINATION -->

            <div class="ss-orders-pagination">

                <button>

                    <i class="fa-solid fa-chevron-left"></i>

                </button>

                <button class="active">1</button>

                <button>2</button>

                <button>3</button>

                <button>

                    <i class="fa-solid fa-chevron-right"></i>

                </button>

            </div>

        </div>

    </div>

</div>
