<section class="ss-categories-page">

    <div class="ss-categories-header">
        <div>
            <span class="ss-category-badge">Modifier un produit</span>
            <h1>Éditer le produit</h1>
            <p>Mettez à jour les informations de ce produit.</p>
        </div>
        <a href="?site=adminProduit">
            <button class="ss-add-category-btn" style="background:linear-gradient(135deg,#6b7280,#4b5563);">
                <i class="fa-solid fa-arrow-left"></i> Retour
            </button>
        </a>
    </div>

    <div class="ss-categories-card" style="max-width:780px; margin:0 auto; border-radius:34px; padding:40px;">

        <?php require_once("partials/flash.php"); ?>

        <?php if ($produit): ?>
        <form method="POST" action="?site=editProduit&id=<?= $produit->id ?>" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $produit->id ?>">

            <div style="display:grid; grid-template-columns:1fr 1fr; gap:24px; margin-bottom:24px;">
                <div>
                    <label style="display:block; font-weight:700; color:#111827; margin-bottom:10px; font-size:15px;">
                        Nom du produit <span style="color:#ef4444;">*</span>
                    </label>
                    <input type="text" name="nom" value="<?= htmlspecialchars($produit->nom) ?>"
                        style="width:100%; height:54px; border:1.5px solid #e5e7eb; border-radius:16px; padding:0 18px; font-size:15px; outline:none; box-sizing:border-box;" required>
                </div>
                <div>
                    <label style="display:block; font-weight:700; color:#111827; margin-bottom:10px; font-size:15px;">
                        Catégorie <span style="color:#ef4444;">*</span>
                    </label>
                    <select name="categorie"
                        style="width:100%; height:54px; border:1.5px solid #e5e7eb; border-radius:16px; padding:0 18px; font-size:15px; outline:none; box-sizing:border-box; background:#fff;" required>
                        <option value="">-- Choisir --</option>
                        <?php foreach($categories as $cat): ?>
                        <option value="<?= $cat->id ?>" <?= ($produit->categorie == $cat->id) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($cat->nom) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label style="display:block; font-weight:700; color:#111827; margin-bottom:10px; font-size:15px;">
                        Prix (FCFA) <span style="color:#ef4444;">*</span>
                    </label>
                    <input type="number" name="prix" value="<?= htmlspecialchars($produit->prix) ?>"
                        style="width:100%; height:54px; border:1.5px solid #e5e7eb; border-radius:16px; padding:0 18px; font-size:15px; outline:none; box-sizing:border-box;" required>
                </div>
                <div>
                    <label style="display:block; font-weight:700; color:#111827; margin-bottom:10px; font-size:15px;">
                        Stock <span style="color:#ef4444;">*</span>
                    </label>
                    <input type="number" name="stock" value="<?= htmlspecialchars($produit->stock) ?>"
                        style="width:100%; height:54px; border:1.5px solid #e5e7eb; border-radius:16px; padding:0 18px; font-size:15px; outline:none; box-sizing:border-box;" required>
                </div>
            </div>

            <div style="margin-bottom:24px;">
                <label style="display:block; font-weight:700; color:#111827; margin-bottom:10px; font-size:15px;">Description</label>
                <textarea name="descript" rows="4"
                    style="width:100%; border:1.5px solid #e5e7eb; border-radius:16px; padding:14px 18px; font-size:15px; outline:none; resize:vertical; box-sizing:border-box; font-family:inherit;"><?= htmlspecialchars($produit->descript) ?></textarea>
            </div>

            <?php if ($produit->image): ?>
            <div style="margin-bottom:16px;">
                <p style="font-weight:700; color:#111827; font-size:15px; margin-bottom:8px;">Image actuelle :</p>
                <img src="images/<?= htmlspecialchars($produit->image) ?>"
                     style="width:100px; height:100px; object-fit:cover; border-radius:16px; border:1.5px solid #edf0f5;">
            </div>
            <?php endif; ?>

            <div style="margin-bottom:32px;">
                <label style="display:block; font-weight:700; color:#111827; margin-bottom:10px; font-size:15px;">
                    Changer l'image (optionnel)
                </label>
                <input type="file" name="image[]" accept="image/*"
                    style="width:100%; border:1.5px dashed #e5e7eb; border-radius:16px; padding:14px 18px; font-size:15px; box-sizing:border-box; background:#fafafa;">
            </div>

            <button type="submit" name="modifier"
                style="width:100%; height:58px; background:linear-gradient(135deg,#eca91c,#d89200); color:#fff; border:none; border-radius:20px; font-size:16px; font-weight:700; cursor:pointer; transition:.35s; box-shadow:0 18px 35px rgba(236,169,28,.22);">
                <i class="fa-solid fa-floppy-disk" style="margin-right:10px;"></i>
                Enregistrer les modifications
            </button>
        </form>
        <?php else: ?>
            <p style="color:#ef4444; text-align:center;">Produit introuvable.</p>
        <?php endif; ?>
    </div>
</section>

<style>
.ss-categories-page {
    padding: 35px;
    background: #f7f8fa;
    min-height: 100vh;
}

.ss-categories-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    gap: 20px;
    margin-bottom: 30px;
}

.ss-category-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 38px;
    padding: 0 16px;
    border-radius: 999px;
    background: #fff4e5;
    color: #eca91c;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 18px;
}

.ss-categories-header h1 {
    font-size: 52px;
    font-weight: 800;
    color: #111827;
    margin-bottom: 12px;
}

.ss-categories-header p {
    font-size: 16px;
    color: #6b7280;
}

.ss-add-category-btn {
    height: 60px;
    padding: 0 28px;
    border: none;
    border-radius: 20px;
    background: linear-gradient(135deg, #eca91c, #d89200);
    color: #fff;
    font-size: 15px;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 12px;
    cursor: pointer;
    transition: .35s;
    box-shadow: 0 18px 35px rgba(236,169,28,.22);
}

.ss-add-category-btn:hover {
    transform: translateY(-4px);
}

.ss-categories-card {
    background: #fff;
    border-radius: 34px;
    border: 1px solid #edf0f5;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(15,23,42,.05);
}

@media(max-width:768px) {
    .ss-categories-page { padding: 18px; }
    .ss-categories-header { flex-direction: column; align-items: flex-start; }
    .ss-categories-header h1 { font-size: 38px; }
    .ss-add-category-btn { width: 100%; justify-content: center; }
    .ss-categories-card > form > div:first-child { grid-template-columns: 1fr !important; }
}
</style>
