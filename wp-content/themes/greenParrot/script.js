const cityCodeInput = document.getElementById("city-code");
const body = document.querySelector("body");
const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector(".nav");
const openPopupForm = document.querySelector(".header__btn");
const closePopupForm = document.querySelector(".form__close");
const popupForm = document.querySelector(".form__wrapper");
const formBtn = document.querySelector(".form__btn");

const eventListeners = () => {
    cityCodeInput.addEventListener("keyup", () => {
        if (cityCodeInput.value.length === 2) {
            cityCodeInput.value += "-";
        }
    });

    hamburger.addEventListener("click", () => {
        toggleNav();
    });

    nav.addEventListener("click", () => {
        toggleNav();
    });

    openPopupForm.addEventListener("click", () => {
        togglePopup();
    });

    closePopupForm.addEventListener("click", (e) => {
        e.preventDefault();

        togglePopup();
    });

    popupForm.addEventListener("click", (e) => {
        if (e.target === popupForm || e.target === formBtn) {
            togglePopup();
        }
    });
};

eventListeners();

const toggleNav = () => {
    hamburger.classList.toggle("is-active");
    nav.classList.toggle("nav--active");
    body.classList.toggle("overflow__hidden");
};

const togglePopup = () => {
    popupForm.classList.toggle("form--active");
    body.classList.toggle("overflow__hidden");
};
