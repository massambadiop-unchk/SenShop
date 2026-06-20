<section class="ss-categories-page">

    <div class="ss-categories-header">
        <div>
            <span class="ss-category-badge">Modifier une catégorie</span>
            <h1>Éditer la catégorie</h1>
            <p>Modifiez les informations de cette catégorie.</p>
        </div>
        <a href="?site=adminCategorie">
            <button class="ss-add-category-btn" style="background:linear-gradient(135deg,#6b7280,#4b5563);">
                <i class="fa-solid fa-arrow-left"></i> Retour
            </button>
        </a>
    </div>

    <div class="ss-categories-card" style="max-width:680px; margin:0 auto; border-radius:34px; padding:40px;">

        <?php require_once("partials/flash.php"); ?>

        <?php if ($categorie): ?>
        <form method="POST" action="?site=editCategorie&id=<?= $categorie->id ?>">
            <input type="hidden" name="id" value="<?= $categorie->id ?>">

            <div style="margin-bottom:24px;">
                <label style="display:block; font-weight:700; color:#111827; margin-bottom:10px; font-size:15px;">
                    Nom de la catégorie <span style="color:#ef4444;">*</span>
                </label>
                <input type="text" name="nom" value="<?= htmlspecialchars($categorie->nom) ?>"
                    placeholder="Ex: Électronique"
                    style="width:100%; height:54px; border:1.5px solid #e5e7eb; border-radius:16px; padding:0 18px; font-size:15px; outline:none; box-sizing:border-box;" required>
            </div>

            <div style="margin-bottom:32px;">
                <label style="display:block; font-weight:700; color:#111827; margin-bottom:10px; font-size:15px;">
                    Description
                </label>
                <textarea name="descript" placeholder="Description de la catégorie..." rows="4"
                    style="width:100%; border:1.5px solid #e5e7eb; border-radius:16px; padding:14px 18px; font-size:15px; outline:none; resize:vertical; box-sizing:border-box; font-family:inherit;"><?= htmlspecialchars($categorie->descript) ?></textarea>
            </div>

            <button type="submit" name="modifier"
                style="width:100%; height:58px; background:linear-gradient(135deg,#eca91c,#d89200); color:#fff; border:none; border-radius:20px; font-size:16px; font-weight:700; cursor:pointer; transition:.35s; box-shadow:0 18px 35px rgba(236,169,28,.22);">
                <i class="fa-solid fa-floppy-disk" style="margin-right:10px;"></i>
                Enregistrer les modifications
            </button>
        </form>
        <?php else: ?>
            <p style="color:#ef4444; text-align:center;">Catégorie introuvable.</p>
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
}
</style>
