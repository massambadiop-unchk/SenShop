
  <!-- ══════════════════ MAIN ══════════════════ -->
  <main class="main">

    <!-- Top bar -->
    <div class="topbar">
      <div class="topbar__welcome">
        <h1 class="welcome-title">Bienvenue, <?= $_SESSION["user"]->prenom ?> <?= $_SESSION["user"]->nom ?>👋</h1>
        <p class="welcome-sub">Voici un aperçu de votre boutique aujourd'hui.</p>
      </div>
     
    </div>


    <!-- ── Two-column section ── -->
    <section class="content-grid">

      <!-- Commandes récentes -->
      <div class="panel">
        <div class="panel__header">
          <div>
            <h2 class="panel__title">Commandes récentes</h2>
            <p class="panel__sub"><?= count($commandes_recentes) ?> nouvelle<?= count($commandes_recentes) > 1 ? "s" : "" ?> commande<?= count($commandes_recentes) > 1 ? "s" : "" ?></p>
          </div>
          <button class="btn-outline">Voir tout →</button>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>Commande</th>
              <th>Client</th>
              <th>Statut</th>
              <th>Montant</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
<?php if(empty($commandes_recentes)): ?>
    <tr><td colspan="5" style="text-align:center; padding:30px; color:#9ca3af;">Aucune commande.</td></tr>
<?php else: ?>
    <?php foreach($commandes_recentes as $c): ?>
    <tr>
        <td class="order-cell">
            <img src="images/<?= htmlspecialchars($c->produit_image) ?>" alt="produit" class="order-img"/>
            <span class="order-id">#SEN<?= str_pad($c->id, 4, '0', STR_PAD_LEFT) ?></span>
        </td>
        <td><span class="client-name"><?= htmlspecialchars($c->prenom.' '.$c->nom) ?></span></td>
        <td><span class="badge badge--orange">En cours</span></td>
        <td class="amount"><?= number_format($c->produit_prix * $c->quantite, 0, ',', '.') ?> FCFA</td>
        <td class="date"><?= date("d M, H:i", strtotime($c->date_commande)) ?></td>
    </tr>
    <?php endforeach; ?>
<?php endif; ?>
          </tbody>
        </table>
      </div>

      <!-- Produits récents -->
      <div class="panel">
        <div class="panel__header">
          <div>
            <h2 class="panel__title">Produits récents</h2>
            <p class="panel__sub"><?= count($produits_recents) ?> produit<?= count($produits_recents) > 1 ? "s" : "" ?></p>
          </div>
          <button class="btn-outline">Voir tout →</button>
        </div>
        <ul class="product-list">
<?php if(empty($produits_recents)): ?>
    <li style="text-align:center; padding:30px; color:#9ca3af;">Aucun produit.</li>
<?php else: ?>
    <?php foreach($produits_recents as $p): ?>
    <li class="product-item">
        <img src="images/<?= htmlspecialchars($p->image) ?>" alt="<?= htmlspecialchars($p->nom) ?>" class="product-img"/>
        <div class="product-info">
            <p class="product-name"><?= htmlspecialchars($p->nom) ?></p>
            <p class="product-stock">Stock : <?= $p->stock ?> unité<?= $p->stock > 1 ? 's' : '' ?></p>
        </div>
        <div class="product-right">
            <span class="product-price"><?= number_format($p->prix, 0, ',', '.') ?> FCFA</span>
            <span class="badge badge--green">Actif</span>
        </div>
    </li>
    <?php endforeach; ?>
<?php endif; ?>
        </ul>
      </div>

    </section>

    <!-- ── Actions rapides ── -->
    <section class="actions-section">
      <h2 class="section-title">Actions rapides</h2>
      <div class="actions-grid">

        <a href="?site=ajoutProduit" class="action-card action-card--featured" a>
          <div class="action-icon action-icon--gold">
            <i data-feather="plus"></i>
          </div>
          <div class="action-text">
            <p class="action-label">Ajouter un produit</p>
            <p class="action-sub">Nouveau produit</p>
          </div>
          <i data-feather="arrow-right" class="action-arrow"></i>
        </a>

        <a class="action-card" href="?site=ajoutCategorie">
          <div class="action-icon action-icon--dark">
            <i data-feather="tag"></i>
          </div>
          <div class="action-text">
            <p class="action-label">Ajouter une catégorie</p>
            <p class="action-sub">Nouvelle catégorie</p>
          </div>
          <i data-feather="arrow-right" class="action-arrow"></i>
        </a>

        <a href="?site=adminCategorie" class="action-card">
          <div class="action-icon action-icon--orange">
            <i data-feather="shopping-cart"></i>
          </div>
          <div class="action-text">
            <p class="action-label">Voir les commandes</p>
            <p class="action-sub">Gérer les commandes</p>
          </div>
          <i data-feather="arrow-right" class="action-arrow"></i>
        </a>

        <a href="?site=adminClient" class="action-card">
          <div class="action-icon action-icon--blue">
            <i data-feather="users"></i>
          </div>
          <div class="action-text">
            <p class="action-label">Voir les clients</p>
            <p class="action-sub">Liste des clients</p>
          </div>
          <i data-feather="arrow-right" class="action-arrow"></i>
        </a>


      </div>
    </section>

  </main>
 <!-- Dashboard Admin - Developpe par Fatou Badji

     Affichage dynamique des commandes et produits recents

     L3 IDA UNCHK - Groupe 67 - 2025 -->
