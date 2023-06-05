const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector("nav");
const back_btn = document.querySelector(".user-img");

hamburger.onclick = function () {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    nav.classList.add("active");
    hamburger.classList.add("hidden");
};

back_btn.onclick = function () {
    nav.classList.remove("active");
    hamburger.classList.remove("hidden");
};
