<!-- ════════════════════════════════════════
     PAGE CATÉGORIES SENSHOP
════════════════════════════════════════ -->
<?php
$categories = getAllcategories();
?>
<section class="ss-categories-page">

    <!-- HEADER -->

    <div class="ss-categories-header">

        <div>

            <span class="ss-category-badge">
                Gestion des catégories
            </span>

            <h1>
                Catégories
            </h1>

            <p>
                Organisez les catégories de votre boutique SenShop.
            </p>

        </div>

        <a href="?site=ajoutCategorie"><button class="ss-add-category-btn">

            <i class="fa-solid fa-plus"></i>

            Ajouter

        </button></a>

    </div>

    <!-- CARD -->

    <div class="ss-categories-card">

        <!-- SEARCH -->

        <div class="ss-categories-search">

            <i class="fa-solid fa-magnifying-glass"></i>

            <input type="text"
            placeholder="Rechercher une catégorie...">

        </div>

        <!-- LIST -->

        <div class="ss-categories-list">

            <!-- ITEM -->
         <?php foreach($categories as $c):?>
            <div class="ss-category-item">

                <!-- LEFT -->

                <div class="ss-category-left">

                    <div class="ss-category-text">

                        <h3><?= $c->nom ?> </h3>

                        <p><?= $c->descript  ?></p>

                    </div>

                </div>

                <!-- ACTIONS -->

                <div class="ss-category-actions">

                    <a href="?site=editCategorie&id=<?= $c->id ?>">
                        <button class="ss-action-btn ss-edit-btn">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                    </a>

                    <a href="?site=adminCategorie&delete=<?= $c->id ?>" onclick="return confirm('Supprimer cette catégorie ?')">
                        <button class="ss-action-btn ss-delete-btn">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </a>

                </div>

            </div>
 <?php endforeach;?>
            <!-- ITEM -->

        </div>

    </div>

</section>

<style>
    /* ════════════════════════════════════════
   PAGE CATÉGORIES
════════════════════════════════════════ */

.ss-categories-page{
    padding:35px;
    background:#f7f8fa;
    min-height:100vh;
}

/* HEADER */

.ss-categories-header{
    display:flex;
    justify-content:space-between;
    align-items:flex-end;
    gap:20px;
    margin-bottom:30px;
}

.ss-category-badge{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    height:38px;
    padding:0 16px;
    border-radius:999px;
    background:#fff4e5;
    color:#eca91c;
    font-size:13px;
    font-weight:700;
    margin-bottom:18px;
}

.ss-categories-header h1{
    font-size:52px;
    font-weight:800;
    color:#111827;
    margin-bottom:12px;
}

.ss-categories-header p{
    font-size:16px;
    color:#6b7280;
}

/* BUTTON */

.ss-add-category-btn{
    height:60px;
    padding:0 28px;
    border:none;
    border-radius:20px;
    background:linear-gradient(
        135deg,
        #eca91c,
        #d89200
    );
    color:#fff;
    font-size:15px;
    font-weight:700;
    display:flex;
    align-items:center;
    gap:12px;
    cursor:pointer;
    transition:.35s;
    box-shadow:0 18px 35px rgba(236,169,28,.22);
}

.ss-add-category-btn:hover{
    transform:translateY(-4px);
}

/* CARD */

.ss-categories-card{
    background:#fff;
    border-radius:34px;
    border:1px solid #edf0f5;
    overflow:hidden;
    box-shadow:0 20px 60px rgba(15,23,42,.05);
}

/* SEARCH */

.ss-categories-search{
    height:85px;
    padding:0 30px;
    border-bottom:1px solid #eef1f5;
    display:flex;
    align-items:center;
    gap:16px;
}

.ss-categories-search i{
    font-size:18px;
    color:#9ca3af;
}

.ss-categories-search input{
    width:100%;
    border:none;
    outline:none;
    background:none;
    font-size:16px;
    color:#111827;
}

/* LIST */

.ss-categories-list{
    padding:26px;
    display:flex;
    flex-direction:column;
    gap:18px;
}

/* ITEM */

.ss-category-item{
    min-height:110px;
    border-radius:28px;
    border:1px solid #edf0f5;
    padding:20px 24px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:20px;
    transition:.35s;
    position:relative;
    overflow:hidden;
}

.ss-category-item::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:5px;
    height:100%;
    background:linear-gradient(
        180deg,
        #eca91c,
        #d89200
    );
    opacity:0;
    transition:.35s;
}

.ss-category-item:hover::before{
    opacity:1;
}

.ss-category-item:hover{
    transform:translateY(-4px);
    border-color:#f6dfad;
    box-shadow:0 18px 40px rgba(15,23,42,.06);
}

/* LEFT */

.ss-category-left{
    display:flex;
    align-items:center;
    gap:18px;
}

/* ICON */

.ss-category-icon{
    width:76px;
    height:76px;
    border-radius:24px;
    background:linear-gradient(
        135deg,
        #fff5df,
        #fff0cc
    );
    color:#eca91c;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:28px;
    flex-shrink:0;
}

/* TEXT */

.ss-category-text h3{
    font-size:23px;
    color:#111827;
    font-weight:800;
    margin-bottom:8px;
}

.ss-category-text p{
    font-size:15px;
    color:#6b7280;
}

/* ACTIONS */

.ss-category-actions{
    display:flex;
    align-items:center;
    gap:12px;
}

/* BUTTON */

.ss-action-btn{
    width:50px;
    height:50px;
    border:none;
    border-radius:18px;
    display:flex;
    align-items:center;
    justify-content:center;
    cursor:pointer;
    transition:.35s;
    font-size:15px;
}

/* VIEW */

.ss-view-btn{
    background:#eef6ff;
    color:#2563eb;
}

.ss-view-btn:hover{
    background:#2563eb;
    color:#fff;
}

/* EDIT */

.ss-edit-btn{
    background:#fff8eb;
    color:#d89a11;
}

.ss-edit-btn:hover{
    background:#d89a11;
    color:#fff;
}

/* DELETE */

.ss-delete-btn{
    background:#fff1f1;
    color:#ef4444;
}

.ss-delete-btn:hover{
    background:#ef4444;
    color:#fff;
}

/* RESPONSIVE */

@media(max-width:768px){

    .ss-categories-page{
        padding:18px;
    }

    .ss-categories-header{
        flex-direction:column;
        align-items:flex-start;
    }

    .ss-categories-header h1{
        font-size:38px;
    }

    .ss-add-category-btn{
        width:100%;
        justify-content:center;
    }

    .ss-category-item{
        flex-direction:column;
        align-items:flex-start;
    }

    .ss-category-actions{
        width:100%;
        justify-content:flex-end;
    }

}
</style>