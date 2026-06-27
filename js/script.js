
/* =========================================================
SENSHOP - SCRIPT.JS COMPLET
========================================================= */

/* =========================================================
HERO SLIDER
========================================================= */

const slides = [

    {
        image: "images/baniere4.png",
        subtitle: "Bienvenue sur SenShop",
        title: "Découvrez le meilleur<br>pour vous",
        text: "Qualité, style et élégance au meilleur prix."
    },

    {
        image: "images/baniere2.png",
        subtitle: "Nouvelle collection premium",
        title: "Achetez les meilleurs<br>produits tendance",
        text: "Des articles modernes et élégants pour tous."
    },

    {
        image: "images/baniere3.png",
        subtitle: "Shopping intelligent",
        title: "Profitez des offres<br>incroyables",
        text: "Livraison rapide partout au Sénégal."
    }

];

/* =========================================================
VARIABLES
========================================================= */

let currentSlide = 0;

const heroSlide = document.querySelector(".slide");

const heroSubtitle = document.querySelector(".hero-subtitle");

const heroTitle = document.querySelector(".hero-title");

const heroText = document.querySelector(".hero-text");

const dots = document.querySelectorAll(".dot");

const nextBtn = document.querySelector(".next-slide");

const prevBtn = document.querySelector(".prev-slide");

/* =========================================================
UPDATE SLIDE
========================================================= */

function updateSlide(index){

    heroSlide.style.opacity = ".6";

    setTimeout(() => {

      heroSlide.style.backgroundImage = `
linear-gradient(rgba(0,0,0,.45),rgba(0,0,0,.45)),
url(${slides[index].image})
`;

        heroSlide.style.backgroundSize = "cover";

        heroSlide.style.backgroundPosition = "center";

        heroSubtitle.innerHTML = slides[index].subtitle;

        heroTitle.innerHTML = slides[index].title;

        heroText.innerHTML = slides[index].text;

        heroSlide.style.opacity = "1";

    },300);

    dots.forEach(dot => {

        dot.classList.remove("active");

    });

    dots[index].classList.add("active");

}

/* =========================================================
NEXT SLIDE
========================================================= */

function nextSlide(){

    currentSlide++;

    if(currentSlide >= slides.length){

        currentSlide = 0;

    }

    updateSlide(currentSlide);

}

/* =========================================================
PREV SLIDE
========================================================= */

function prevSlide(){

    currentSlide--;

    if(currentSlide < 0){

        currentSlide = slides.length - 1;

    }

    updateSlide(currentSlide);

}

/* =========================================================
AUTO SLIDE
========================================================= */

setInterval(() => {

    nextSlide();

},5000);

/* =========================================================
BUTTON EVENTS
========================================================= */

nextBtn.addEventListener("click", () => {

    nextSlide();

});

prevBtn.addEventListener("click", () => {

    prevSlide();

});

/* =========================================================
DOTS EVENTS
========================================================= */

dots.forEach((dot,index) => {

    dot.addEventListener("click", () => {

        currentSlide = index;

        updateSlide(currentSlide);

    });

});

/* =========================================================
PRODUCT HOVER EFFECT
========================================================= */

const productCards = document.querySelectorAll(".product-card");

productCards.forEach(card => {

    card.addEventListener("mouseenter", () => {

        card.style.transform = "translateY(-10px)";

    });

    card.addEventListener("mouseleave", () => {

        card.style.transform = "translateY(0px)";

    });

});

/* =========================================================
CATEGORY HOVER EFFECT
========================================================= */

const categoryCards = document.querySelectorAll(".category-card");

categoryCards.forEach(card => {

    card.addEventListener("mouseenter", () => {

        const img = card.querySelector("img");

        img.style.transform = "scale(1.08)";

        img.style.transition = ".5s";

    });

    card.addEventListener("mouseleave", () => {

        const img = card.querySelector("img");

        img.style.transform = "scale(1)";

    });

});

/* =========================================================
VIDEO PLAY BUTTON


/* =========================================================
SCROLL ANIMATION
========================================================= */

const hiddenElements = document.querySelectorAll(
    ".product-card, .service-card, .category-card, .testimonial-card"
);

const observer = new IntersectionObserver((entries) => {

    entries.forEach(entry => {

        if(entry.isIntersecting){

            entry.target.classList.add("show-element");

        }

    });

},{
    threshold:0.2
});

hiddenElements.forEach(el => {

    el.classList.add("hidden-element");

    observer.observe(el);

});

/* =========================================================
NAVBAR SHADOW ON SCROLL
========================================================= */

const navbar = document.querySelector(".custom-navbar");

window.addEventListener("scroll", () => {

    if(window.scrollY > 50){

        navbar.style.boxShadow = "0 8px 30px rgba(0,0,0,.08)";

    }else{

        navbar.style.boxShadow = "none";

    }

});

/* =========================================================
FAKE CART COUNTER
========================================================= */

let cart = 0;

const cartCount = document.querySelector(".cart-count");

const cartButtons = document.querySelectorAll(".bi-cart");

cartButtons.forEach(btn => {

    btn.addEventListener("click", () => {

        cart++;

        cartCount.innerHTML = cart;

        cartCount.style.transform = "scale(1.3)";

        setTimeout(() => {

            cartCount.style.transform = "scale(1)";

        },200);

    });

});

/* =========================================================
HEART TOGGLE
========================================================= */

const heartIcons = document.querySelectorAll(".bi-heart");

heartIcons.forEach(icon => {

    icon.addEventListener("click", () => {

        icon.classList.toggle("active-heart");

        if(icon.classList.contains("active-heart")){

            icon.style.color = "#ff3b30";

        }else{

            icon.style.color = "#111";

        }

    });

});

/* =========================================================
SMOOTH SCROLL
========================================================= */

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener("click", function(e){

        e.preventDefault();

        const target = document.querySelector(
            this.getAttribute("href")
        );

        if(target){

            target.scrollIntoView({

                behavior:"smooth"

            });

        }

    });

});

/* =========================================================
NEWSLETTER FORM
========================================================= */

const newsletterForm = document.querySelector(".newsletter form");

newsletterForm.addEventListener("submit", (e) => {

    e.preventDefault();

    const input = newsletterForm.querySelector("input");
    const flashZone = document.getElementById("newsletter-flash");

    if(input.value === ""){

        flashZone.innerHTML = `<div class="alert alert-danger ss-custom-alert alert-dismissible fade show" role="alert">
            <div class="ss-alert-content">
                <div class="ss-alert-icon"><i class="fa-solid fa-circle-exclamation"></i></div>
                <div class="ss-alert-text">Veuillez entrer votre adresse email.</div>
            </div>
            <button type="button" class="close ss-alert-close" onclick="this.parentElement.remove()"><span>&times;</span></button>
        </div>`;

    }else{

        flashZone.innerHTML = `<div class="alert alert-success ss-custom-alert alert-dismissible fade show" role="alert">
            <div class="ss-alert-content">
                <div class="ss-alert-icon"><i class="fa-solid fa-circle-check"></i></div>
                <div class="ss-alert-text">Merci pour votre inscription !</div>
            </div>
            <button type="button" class="close ss-alert-close" onclick="this.parentElement.remove()"><span>&times;</span></button>
        </div>`;

        input.value = "";

    }

});

/* =========================================================
PAGE LOAD EFFECT
========================================================= */

window.addEventListener("load", () => {

    document.body.style.opacity = "1";

});

/* =========================================================
MOBILE MENU CLOSE
========================================================= */

const navLinks = document.querySelectorAll(".nav-link");

const navbarCollapse = document.querySelector(".navbar-collapse");

navLinks.forEach(link => {

    link.addEventListener("click", () => {

        if(window.innerWidth < 992){

            navbarCollapse.classList.remove("show");

        }

    });

});

/* =========================================================
TESTIMONIAL SLIDER AUTO EFFECT
========================================================= */

const testimonials = document.querySelectorAll(".testimonial-card");

let testimonialIndex = 0;

function testimonialAnimation(){

    testimonials.forEach(card => {

        card.style.opacity = ".5";

    });

    testimonials[testimonialIndex].style.opacity = "1";

    testimonialIndex++;

    if(testimonialIndex >= testimonials.length){

        testimonialIndex = 0;

    }

}

setInterval(() => {

    testimonialAnimation();

},3000);

/* =========================================================
IMAGE LOADING EFFECT
========================================================= */

const images = document.querySelectorAll("img");

images.forEach(img => {

    img.addEventListener("load", () => {

        img.style.opacity = "1";

    });

});

/* =========================================================
btn play
========================================================= */

const storyVideo = document.getElementById("storyVideo");
const playPauseBtn = document.getElementById("playPauseBtn");
const playIcon = document.getElementById("playIcon");

playPauseBtn.addEventListener("click", () => {

    if(storyVideo.paused){

        storyVideo.play();

        playIcon.classList.remove("bi-play-fill");
        playIcon.classList.add("bi-pause-fill");

    } else {

        storyVideo.pause();

        playIcon.classList.remove("bi-pause-fill");
        playIcon.classList.add("bi-play-fill");

    }

});



const discoverVideo = document.getElementById("discoverVideo");
const discoverPlayBtn = document.getElementById("discoverPlayBtn");
const discoverIcon = document.getElementById("discoverIcon");

discoverPlayBtn.addEventListener("click", () => {

    if(discoverVideo.paused){

        discoverVideo.play();

        discoverIcon.classList.remove("bi-play-fill");
        discoverIcon.classList.add("bi-pause-fill");

    } else {

        discoverVideo.pause();

        discoverIcon.classList.remove("bi-pause-fill");
        discoverIcon.classList.add("bi-play-fill");

    }

});

/* =========================================================
AUTH POPUP
========================================================= */

const openAuth = document.getElementById("openAuth");

const authPopup = document.getElementById("authPopup");

const closeAuth = document.getElementById("closeAuth");

const closePopupBtn = document.getElementById("closePopupBtn");

const showRegister = document.getElementById("showRegister");

const showLogin = document.getElementById("showLogin");

const loginForm = document.getElementById("loginForm");

const registerForm = document.getElementById("registerForm");

/* OPEN */

openAuth.addEventListener("click", () => {

    authPopup.classList.add("show-auth");

});

/* CLOSE */

function closePopup(){

    authPopup.classList.remove("show-auth");

}

closeAuth.addEventListener("click", closePopup);

closePopupBtn.addEventListener("click", closePopup);

/* SWITCH LOGIN / REGISTER */

showRegister.addEventListener("click", () => {

    loginForm.classList.remove("active-auth");

    registerForm.classList.add("active-auth");

});

showLogin.addEventListener("click", () => {

    registerForm.classList.remove("active-auth");

    loginForm.classList.add("active-auth");

});

/* ESC CLOSE */

window.addEventListener("keydown", (e) => {

    if(e.key === "Escape"){

        closePopup();

    }

});
// Script JS principal - Rama Yade - L3 IDA UNCHK Groupe 67 2025
