<?php
$panier = $_SESSION['panier'] ?? [];
$total  = 0;
foreach($panier as $item){ $total += $item['prix'] * $item['quantite']; }
?>
<section style="padding:60px 0; background:#f7f8fa; min-height:80vh;">
<div class="container">
    <h1 style="font-size:32px; font-weight:800; color:#111827; margin-bottom:6px;">Mon panier</h1>
    <p style="color:#6b7280; margin-bottom:40px;"><?= count($panier) ?> article<?= count($panier) > 1 ? 's' : '' ?></p>

    <?php if(empty($panier)): ?>
    <div style="text-align:center; padding:80px 20px; background:#fff; border-radius:24px;">
        <i class="bi bi-bag" style="font-size:60px; color:#d1d5db;"></i>
        <h3 style="margin-top:20px; color:#374151;">Votre panier est vide</h3>
        <p style="color:#9ca3af; margin-bottom:30px;">Ajoutez des produits pour commencer vos achats.</p>
        <a href="index.php" style="background:#eca91c; color:#fff; padding:14px 32px; border-radius:14px; text-decoration:none; font-weight:700;">Voir les produits</a>
    </div>
    <?php else: ?>
    <div style="display:grid; grid-template-columns:1fr 320px; gap:30px; align-items:start;">
        <div style="display:flex; flex-direction:column; gap:14px;">
            <?php foreach($panier as $id => $item): ?>
            <div style="background:#fff; border-radius:20px; padding:18px 22px; display:flex; align-items:center; gap:18px; border:1px solid #edf0f5;">
                <img src="images/<?= htmlspecialchars($item['image']) ?>" style="width:85px; height:85px; object-fit:cover; border-radius:14px; flex-shrink:0;">
                <div style="flex:1;">
                    <h4 style="font-size:16px; font-weight:700; color:#111827; margin-bottom:4px;"><?= htmlspecialchars($item['nom']) ?></h4>
                    <span style="font-size:14px; color:#6b7280;"><?= number_format($item['prix'], 0, ',', '.') ?> FCFA / unité</span>
                </div>
                <div style="display:flex; align-items:center; gap:10px;">
                    <a href="?page=panier&moins=<?= $id ?>" style="width:34px; height:34px; border-radius:10px; background:#f3f4f6; display:flex; align-items:center; justify-content:center; text-decoration:none; color:#374151; font-size:18px; font-weight:700;">−</a>
                    <span style="font-size:16px; font-weight:700; min-width:20px; text-align:center;"><?= $item['quantite'] ?></span>
                    <a href="?page=panier&plus=<?= $id ?>" style="width:34px; height:34px; border-radius:10px; background:#f3f4f6; display:flex; align-items:center; justify-content:center; text-decoration:none; color:#374151; font-size:18px; font-weight:700;">+</a>
                </div>
                <div style="min-width:110px; text-align:right;">
                    <span style="font-size:16px; font-weight:800; color:#111827;"><?= number_format($item['prix'] * $item['quantite'], 0, ',', '.') ?> FCFA</span>
                </div>
                <a href="?page=panier&supprimer=<?= $id ?>" style="width:38px; height:38px; border-radius:12px; background:#fff1f1; display:flex; align-items:center; justify-content:center; text-decoration:none; color:#ef4444; flex-shrink:0;"><i class="bi bi-trash"></i></a>
            </div>
            <?php endforeach; ?>
            <div style="text-align:right; margin-top:6px;">
                <a href="?page=panier&vider=1" style="color:#ef4444; font-size:13px; text-decoration:none; font-weight:600;"><i class="bi bi-trash"></i> Vider le panier</a>
            </div>
        </div>
        <div style="background:#fff; border-radius:24px; padding:28px; border:1px solid #edf0f5; position:sticky; top:20px;">
            <h3 style="font-size:19px; font-weight:800; color:#111827; margin-bottom:20px;">Résumé</h3>
            <div style="display:flex; justify-content:space-between; margin-bottom:12px; font-size:14px;">
                <span style="color:#6b7280;">Sous-total</span>
                <strong><?= number_format($total, 0, ',', '.') ?> FCFA</strong>
            </div>
            <div style="display:flex; justify-content:space-between; margin-bottom:20px; font-size:14px;">
                <span style="color:#6b7280;">Livraison</span>
                <strong style="color:#22c55e;">Gratuite</strong>
            </div>
            <div style="display:flex; justify-content:space-between; align-items:center; border-top:1px solid #edf0f5; padding-top:16px; margin-bottom:24px;">
                <span style="font-weight:700; color:#111827;">Total</span>
                <span style="font-size:20px; font-weight:800; color:#eca91c;"><?= number_format($total, 0, ',', '.') ?> FCFA</span>
            </div>
            <?php $premier = reset($panier); ?>
            <a href="?page=commande&id=<?= $premier['id'] ?>" style="display:block; text-align:center; background:#eca91c; color:#fff; padding:16px; border-radius:16px; font-size:15px; font-weight:700; text-decoration:none; margin-bottom:12px;">
                <i class="bi bi-lock"></i> Commander maintenant
            </a>
            <a href="index.php" style="display:block; text-align:center; color:#9ca3af; font-size:13px; text-decoration:none;">← Continuer mes achats</a>
        </div>
    </div>
    <?php endif; ?>
</div>
</section>
