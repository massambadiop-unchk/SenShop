
document.addEventListener("DOMContentLoaded", () => {

    const plusBtn = document.getElementById("plusBtn");

    const minusBtn = document.getElementById("minusBtn");

    const quantityInput = document.getElementById("quantityInput");

    const subtotalPrice = document.getElementById("subtotalPrice");

    const totalPrice = document.getElementById("totalPrice");

    const summaryPrice = document.getElementById("summaryPrice");

    let quantity = 1;

    const unitPrice = 18900;

    /* FORMAT PRIX */

    function formatPrice(price){

        return price.toLocaleString('fr-FR') + ' FCFA';
// JS Page Commande - Meissa Ismaila Top - L3 IDA UNCHK Groupe 67 2025

    }

    /* UPDATE */

    function updatePrice(){

        quantityInput.value = quantity;

        const total = quantity * unitPrice;

        const formatted = formatPrice(total);

        subtotalPrice.innerHTML = formatted;

        totalPrice.innerHTML = formatted;

        summaryPrice.innerHTML = formatted;

    }

    /* PLUS */

    plusBtn.addEventListener("click", () => {

        quantity++;

        updatePrice();

    });

    /* MINUS */

    minusBtn.addEventListener("click", () => {

        if(quantity > 1){

            quantity--;

            updatePrice();

        }

    });

});
/* =========================================================
SENSHOP PRODUCT GALLERY
Transition fluide + changement auto
========================================================= */

document.addEventListener("DOMContentLoaded", function(){

    /* =====================================================
    ELEMENTS
    ===================================================== */

    const senShopMainImage = document.getElementById("mainImage");

    const senShopThumbs = document.querySelectorAll(".gallery-thumbs img");

    /* =====================================================
    STOP
    ===================================================== */

    if(!senShopMainImage || senShopThumbs.length === 0){

        return;

    }

    /* =====================================================
    CONFIG
    ===================================================== */

    let senShopCurrentIndex = 0;

    let senShopAutoSlide;

    /* =====================================================
    STYLE FLUIDE
    ===================================================== */

    senShopMainImage.style.transition = "opacity .5s ease";

    /* =====================================================
    CHANGE IMAGE
    ===================================================== */

    function senShopChangeImage(index){

        /* ACTIVE THUMB */

        senShopThumbs.forEach((img) => {

            img.classList.remove("active-thumb");

        });

        senShopThumbs[index].classList.add("active-thumb");

        /* FADE OUT */

        senShopMainImage.style.opacity = "0";

        setTimeout(() => {

            /* IMAGE DIRECTEMENT */

            senShopMainImage.src = senShopThumbs[index].src;

            /* FADE IN */

            senShopMainImage.style.opacity = "1";

        }, 250);

        /* UPDATE INDEX */

        senShopCurrentIndex = index;

    }

    /* =====================================================
    AUTO SLIDE
    ===================================================== */

    function senShopStartSlide(){

        senShopAutoSlide = setInterval(() => {

            senShopCurrentIndex++;

            if(senShopCurrentIndex >= senShopThumbs.length){

                senShopCurrentIndex = 0;

            }

            senShopChangeImage(senShopCurrentIndex);

        }, 5000);

    }

    /* =====================================================
    CLICK IMAGE
    ===================================================== */

    senShopThumbs.forEach((thumb, index) => {

        thumb.addEventListener("click", function(){

            clearInterval(senShopAutoSlide);

            senShopChangeImage(index);

            senShopStartSlide();

        });

    });

    /* =====================================================
    INIT
    ===================================================== */

    senShopStartSlide();

});
