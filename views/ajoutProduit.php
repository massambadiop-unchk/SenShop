<?php 
$categories = getAllcategories();
require_once("partials/flash.php");
?>
<style>
.ss-custom-alert{
    width:100%;
    max-width:620px;
    margin:40px auto -20px auto;
    border:none !important;
    border-radius:24px !important;
    background:#ffffff !important;
    box-shadow:0 15px 40px rgba(15,23,42,.08);
    padding:18px 22px !important;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:20px;
    animation:ssAlert .4s ease;
    border-left:5px solid #eca91c !important;
}

/* ANIMATION */

@keyframes ssAlert{

    from{
        opacity:0;
        transform:translateY(-18px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }

}

/* CONTENT */

.ss-alert-content{
    display:flex;
    align-items:center;
    gap:16px;
}

/* ICON */

.ss-alert-icon{
    width:52px;
    height:52px;
    border-radius:16px;
    background:rgba(236,169,28,.12);
    color:#eca91c;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:20px;
    flex-shrink:0;
}

/* TEXT */

.ss-alert-text{
    font-size:15px;
    font-weight:600;
    color:#111827;
    line-height:1.7;
}

/* CLOSE */

.ss-alert-close{
    width:42px;
    height:42px;
    border:none;
    border-radius:12px;
    background:#f3f4f6;
    color:#6b7280;
    opacity:1 !important;
    display:flex;
    align-items:center;
    justify-content:center;
    transition:.3s;
    outline:none !important;
    box-shadow:none !important;
}

.ss-alert-close span{
    font-size:22px;
    line-height:1;
}

.ss-alert-close:hover{
    background:#ef4444;
    color:#fff !important;
}

/* SUCCESS */

.alert-success.ss-custom-alert{
    border-left-color:#22c55e !important;
}

.alert-success .ss-alert-icon{
    background:#eaf9ef;
    color:#22c55e;
}

/* ERROR */

.alert-danger.ss-custom-alert{
    border-left-color:#ef4444 !important;
}

.alert-danger .ss-alert-icon{
    background:#fff1f1;
    color:#ef4444;
}

/* WARNING */

.alert-warning.ss-custom-alert{
    border-left-color:#f59e0b !important;
}

.alert-warning .ss-alert-icon{
    background:#fff7e8;
    color:#f59e0b;
}

/* RESPONSIVE */

@media(max-width:768px){

    .ss-custom-alert{
        margin:25px 16px -10px 16px;
        padding:16px;
        border-radius:20px !important;
    }

    .ss-alert-text{
        font-size:14px;
    }
    }
</style>
<!-- ════════════════════════════════════════
     PAGE AJOUT PRODUIT - SENSHOP
════════════════════════════════════════ -->

<form action="" method="post" enctype="multipart/form-data">

<div class="ss-add-product-page">

    <!-- HEADER -->

    <div class="ss-add-header">

        <div class="ss-add-header-left">

            <button class="ss-back-btn" type="button">

                <i class="fa-solid fa-arrow-left"></i>

            </button>

            <div>

                <h1>Ajouter un produit</h1>

                <div class="ss-breadcrumb">

                    <a href="?site=dashboard">Accueil</a>

                    <span>›</span>

                    <a href="?site=adminProduit">Produits</a>

                    <span>›</span>

                    <p>Ajouter un produit</p>

                </div>

            </div>

        </div>

        <div class="ss-add-header-actions">

            <button 
                class="ss-btn-cancel"
                type="reset"
            >

                <i class="fa-solid fa-xmark"></i>

                Annuler

            </button>

            <button 
                class="ss-btn-save"
                type="submit"
                name="ajouter"
            >

                <i class="fa-regular fa-floppy-disk"></i>

                Enregistrer le produit

            </button>

        </div>

    </div>

    <!-- GRID -->

    <div class="ss-add-grid">

        <!-- LEFT -->

        <div class="ss-card">

            <h2>Informations du produit</h2>

            <div class="ss-form">

                <!-- ROW -->

                <div class="ss-form-row">

                    <!-- NOM -->

                    <div class="ss-form-group">

                        <label>

                            Nom du produit <span>*</span>

                        </label>

                        <input 
                            type="text"
                            name="nom"
                            placeholder="Entrez le nom du produit"
                        >

                    </div>

                    <!-- CATEGORIE -->

                    <div class="ss-form-group">

                        <label>

                            Catégorie <span>*</span>

                        </label>

                        <select name="categorie">

                            <option value="">
                                Sélectionner une catégorie
                            </option>

                            <?php foreach($categories as $c): ?>

                                <option value="<?= $c->id ?>">

                                    <?= htmlspecialchars($c->nom) ?>

                                </option>

                            <?php endforeach; ?>

                        </select>

                    </div>

                </div>

                <!-- ROW -->

                <div class="ss-form-row">

                    <!-- PRIX -->

                    <div class="ss-form-group">

                        <label>

                            Prix de vente (FCFA) <span>*</span>

                        </label>

                        <input 
                            type="texte"
                            name="prix"
                            placeholder="Entrez le prix"
                        >

                    </div>

                    <!-- STOCK -->

                    <div class="ss-form-group">

                        <label>

                            Stock disponible <span>*</span>

                        </label>

                        <input 
                            type="number"
                            name="stock"
                            placeholder="Entrez le stock"
                        >

                    </div>

                </div>

                <!-- DESCRIPTION -->

                <div class="ss-form-group">

                    <label>

                        Description du produit <span>*</span>

                    </label>

                    <div class="ss-editor">

                        <!-- TOOLBAR -->

                        <div class="ss-editor-toolbar">

                            <button type="button">

                                <i class="fa-solid fa-bold"></i>

                            </button>

                            <button type="button">

                                <i class="fa-solid fa-italic"></i>

                            </button>

                            <button type="button">

                                <i class="fa-solid fa-underline"></i>

                            </button>

                            <button type="button">

                                <i class="fa-solid fa-list"></i>

                            </button>

                            <button type="button">

                                <i class="fa-solid fa-link"></i>

                            </button>

                        </div>

                        <!-- TEXTAREA -->

                        <textarea
                            name="descript"
                            placeholder="Décrivez votre produit..."
                        ></textarea>

                    </div>

                </div>

            </div>

        </div>

        <!-- RIGHT -->

        <div class="ss-side-column">

            <div class="ss-card">

                <h2>Images du produit</h2>

                <!-- INPUT FILE -->

                <input
                    type="file"
                    id="ssProductImages"
                    name="image[]"
                    multiple
                    accept="image/*"
                    hidden
                >

                <!-- UPLOAD BOX -->

                <div class="ss-upload-box" id="ssUploadBox">

                    <div class="ss-upload-icon">

                        <i class="fa-solid fa-cloud-arrow-up"></i>

                    </div>

                    <h3>

                        Glissez vos images ici

                    </h3>

                    <p>

                        PNG, JPG ou WEBP

                    </p>

                    <button
                        type="button"
                        id="ssSelectImagesBtn"
                    >

                        Sélectionner des images

                    </button>

                </div>

                <!-- PREVIEW -->

                <div 
                    class="ss-preview-grid"
                    id="ssPreviewGrid"
                >

                    <!-- ADD MORE -->

                    <button
                        type="button"
                        class="ss-add-more-btn"
                        id="ssAddMoreBtn"
                    >

                        <i class="fa-solid fa-plus"></i>

                        <span>Ajouter</span>

                    </button>

                </div>

            </div>

        </div>

    </div>

</div>

</form>

<!-- ════════════════════════════════════════
     JAVASCRIPT
════════════════════════════════════════ -->

<script>

document.addEventListener("DOMContentLoaded", () => {

    const ssInputFile = document.getElementById('ssProductImages');

    const ssPreviewGrid = document.getElementById('ssPreviewGrid');

    const ssSelectBtn = document.getElementById('ssSelectImagesBtn');

    const ssAddMoreBtn = document.getElementById('ssAddMoreBtn');

    const ssUploadBox = document.getElementById('ssUploadBox');

    /* OUVRIR INPUT */

    ssSelectBtn.addEventListener('click', () => {

        ssInputFile.click();

    });

    ssAddMoreBtn.addEventListener('click', () => {

        ssInputFile.click();

    });

    ssUploadBox.addEventListener('click', () => {

        ssInputFile.click();

    });

    /* PREVIEW IMAGE */

    ssInputFile.addEventListener('change', function(){

        const files = this.files;

        Array.from(files).forEach(file => {

            if(!file.type.startsWith('image/')) return;

            const reader = new FileReader();

            reader.onload = function(e){

                const imageBox = document.createElement('div');

                imageBox.className = 'ss-preview-item';

                imageBox.innerHTML = `

                    <img src="${e.target.result}">

                    <button 
                        type="button"
                        class="ss-remove-image"
                    >

                        <i class="fa-solid fa-xmark"></i>

                    </button>

                `;

                ssPreviewGrid.insertBefore(

                    imageBox,

                    ssAddMoreBtn

                );

                /* DELETE IMAGE */

                imageBox
                .querySelector('.ss-remove-image')
                .addEventListener('click', () => {

                    imageBox.remove();

                });

            };

            reader.readAsDataURL(file);

        });

    });

    /* DRAG & DROP */

    ssUploadBox.addEventListener('dragover', (e) => {

        e.preventDefault();

        ssUploadBox.classList.add('dragging');

    });

    ssUploadBox.addEventListener('dragleave', () => {

        ssUploadBox.classList.remove('dragging');

    });

    ssUploadBox.addEventListener('drop', (e) => {

        e.preventDefault();

        ssUploadBox.classList.remove('dragging');

        const files = e.dataTransfer.files;

        Array.from(files).forEach(file => {

            if(!file.type.startsWith('image/')) return;

            const reader = new FileReader();

            reader.onload = function(ev){

                const imageBox = document.createElement('div');

                imageBox.className = 'ss-preview-item';

                imageBox.innerHTML = `

                    <img src="${ev.target.result}">

                    <button 
                        type="button"
                        class="ss-remove-image"
                    >

                        <i class="fa-solid fa-xmark"></i>

                    </button>

                `;

                ssPreviewGrid.insertBefore(

                    imageBox,

                    ssAddMoreBtn

                );

                imageBox
                .querySelector('.ss-remove-image')
                .addEventListener('click', () => {

                    imageBox.remove();

                });

            };

            reader.readAsDataURL(file);

        });

    });

});

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