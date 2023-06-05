const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");
const prevButton = document.querySelector(".prev-btn");
const nextButton = document.querySelector(".next-btn");

let currentSlide = 0;
let slideInterval = setInterval(nextSlide, 13500);

function nextSlide() {
    slides[currentSlide].classList.remove("active");
    dots[currentSlide].classList.remove("active");

    currentSlide = (currentSlide + 1) % slides.length;

    slides[currentSlide].classList.add("active");
    dots[currentSlide].classList.add("active");
}

function previousSlide() {
    slides[currentSlide].classList.remove("active");
    dots[currentSlide].classList.remove("active");

    currentSlide = (currentSlide - 1 + slides.length) % slides.length;

    slides[currentSlide].classList.add("active");
    dots[currentSlide].classList.add("active");
}

prevButton.addEventListener("click", previousSlide);
nextButton.addEventListener("click", nextSlide);

dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
        goToSlide(index);
    });
});

function goToSlide(index) {
    slides[currentSlide].classList.remove("active");
    dots[currentSlide].classList.remove("active");

    currentSlide = index;

    slides[currentSlide].classList.add("active");
    dots[currentSlide].classList.add("active");
}

// burger btn

const header = document.querySelector(".header");
const nav = document.querySelector(".nav");
const burger = document.querySelector(".header__burger");

function burgerHandler() {
    header.classList.toggle("header-height");
    nav.classList.toggle("left");
}

burger.addEventListener("click", burgerHandler);

const addToCartBtnMain = document.querySelectorAll(".product__link");

function addToCartMainHandler(event) {
    const clickedBtn = event.target;
    clickedBtn.classList.add("disabled");
}

addToCartBtnMain.forEach(function (btn) {
    btn.addEventListener("click", addToCartMainHandler);
});
