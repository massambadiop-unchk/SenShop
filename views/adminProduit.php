

<?php
 $produits = getAllproduits();
?>
<!-- ════════════════════════════════════════
     PAGE PRODUITS - SENSHOP ADMIN
════════════════════════════════════════ -->

<!-- ════════════════════════════════════════
     PAGE PRODUITS
════════════════════════════════════════ -->

<div class="ss-products-page">

    <!-- HEADER -->

    <div class="ss-products-header">

        <div>

            <h1>Produits</h1>

            <p>Gérez tous vos produits de la boutique.</p>

        </div>

        <a href="?site=ajoutProduit"><button class="ss-add-product-btn">

            <i class="fa-solid fa-plus"></i>

            Ajouter un produit

        </button></a>

    </div>

    <!-- TABLE CARD -->

    <div class="ss-products-card">

        <!-- FILTERS -->

        <div class="ss-products-filters">

            <!-- SEARCH -->

            <div class="ss-search-box">

                <i class="fa-solid fa-magnifying-glass"></i>

                <input type="text"
                placeholder="Rechercher un produit...">

            </div>

            <!-- SELECT -->

            <select>

                <option>Toutes catégories</option>

                <option>Audio</option>

                <option>Beauté</option>

                <option>Mode</option>

            </select>

            <!-- SELECT -->

            <!-- SELECT -->

            <select>

                <option>Stock</option>

                <option>Disponible</option>

                <option>Rupture</option>

            </select>

            <!-- RESET -->

            <button class="ss-reset-btn">

                <i class="fa-solid fa-rotate-left"></i>

                Réinitialiser

            </button>

        </div>

        <!-- TABLE -->

        <div class="ss-products-table-wrapper">

            <table class="ss-products-table">

                <!-- HEAD -->

                <thead>

                    <tr>

                        <th>Produit</th>

                        <th>Catégorie</th>

                        <th>Prix de vente</th>

                        <th>Stock</th>

                        <th>Actions</th>

                    </tr>

                </thead>

                <!-- BODY -->

                <tbody>

                    <!-- ITEM -->
                  <?php foreach($produits as $p):?>
                    <tr>

                        <td>

                            <div class="ss-product-info">

                                <img 
                  src="images/<?= htmlspecialchars($p->image) ?>" 
                  alt="<?= htmlspecialchars($p->nom) ?>"
>

                                <h4>Casque Bluetooth Pro</h4>

                            </div>

                        </td>

                        <td><?= $p->nom ?></td>

                        <td><?= $p->prix ?></td>

                        <td class="ss-stock-green">

                            <?= $p->stock ?>

                        </td>


            

                        <!-- ACTIONS -->

                        <td>

                            <div class="ss-actions">

                                <!-- EDIT -->

                                <a href="?site=editProduit&id=<?= $p->id ?>"><button class="ss-action-btn ss-edit-btn"><i class="fa-solid fa-pen"></i></button></a>

                                <!-- DELETE -->

                                <a href="?site=adminProduit&delete=<?= $p->id ?>" onclick="return confirm('Supprimer ce produit ?')"><button class="ss-action-btn ss-delete-btn"><i class="fa-solid fa-trash"></i></button></a>
                                </a>

                                <!-- VIEW -->

                                

                            </div>

                        </td>

                    </tr>
                   <?php endforeach;?>
                    <!-- ITEM -->

                </tbody>

            </table>

        </div>

        <!-- FOOTER -->

    </div>

</div>

