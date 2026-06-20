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
     PAGE AJOUT CATÉGORIE
════════════════════════════════════════ -->
<?php
require_once ("partials/flash.php");
?>
<form action="" method="post">
<div class="ss-add-category-page">

    <!-- HEADER -->

    <div class="ss-category-topbar">

        <!-- LEFT -->

        <div class="ss-category-topbar-left">

            <button class="ss-back-btn">

                <i class="fa-solid fa-arrow-left"></i>

            </button>

            <div>

                <h1>Ajouter une catégorie</h1>

                <div class="ss-breadcrumb">

                    <a href="?site=dashboard">Accueil</a>

                    <span>›</span>

                    <a href="?site=adminCategorie">Catégories</a>

                    <span>›</span>

                    <p>Ajouter une catégorie</p>

                </div>

            </div>

        </div>

        <!-- RIGHT -->

        <div class="ss-category-actions">

            <button class="ss-cancel-btn">

                <i class="fa-solid fa-xmark"></i>

                Annuler

            </button>

            <button class="ss-save-category-btn" name="ajouter">

                <i class="fa-solid fa-floppy-disk"></i>

                Enregistrer la catégorie

            </button>

        </div>

    </div>

    <!-- CARD -->

    <div class="ss-category-card">

        <!-- LEFT INFO -->

        <div class="ss-category-side">

            <div class="ss-category-icon">

                <i class="fa-solid fa-file-circle-plus"></i>

            </div>

            <h3>Créer une nouvelle catégorie</h3>

            <div class="ss-category-line"></div>

            <p>
                Les catégories vous aident à organiser
                vos produits et à améliorer la navigation
                dans votre boutique.
            </p>

            <div class="ss-category-dots"></div>

        </div>

        <!-- FORM -->

        <div class="ss-category-form">

            <!-- INPUT -->

            <div class="ss-category-group">

                <label>

                    Nom de la catégorie
                    <span>*</span>
                </label>

                <input type="text"
                placeholder="Entrez le nom de la catégorie" name="nom">

            </div>

            <!-- DESCRIPTION -->

            <div class="ss-category-group">

                <label>Description</label>

                <!-- EDITOR -->

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

                        <div class="ss-toolbar-divider"></div>

                        <button type="button">
                            <i class="fa-solid fa-list"></i>
                        </button>

                        <button type="button">
                            <i class="fa-solid fa-list-check"></i>
                        </button>

                        <div class="ss-toolbar-divider"></div>

                        <button type="button">
                            <i class="fa-solid fa-link"></i>
                        </button>

                    </div>

                    <!-- TEXTAREA -->

                    <textarea placeholder="Décrivez la catégorie..." name="descript"></textarea>

                </div>

            </div>

        </div>

    </div>

    <!-- CONSEIL -->

    <div class="ss-category-tip">

        <div class="ss-tip-icon">

            <i class="fa-regular fa-lightbulb"></i>

        </div>

        <div>

            <h4>Conseil</h4>

            <p>
                Une bonne catégorie permet d'organiser vos produits
                et d'améliorer l'expérience de vos clients.
            </p>

        </div>

    </div>

</div>
</form>
<script>

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

