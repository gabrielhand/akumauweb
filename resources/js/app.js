import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const themeToggleCheckbox = document.querySelector(".theme-controller");
    const storedTheme = localStorage.getItem("theme") || "dark";

    document.documentElement.setAttribute("data-theme", storedTheme);
    themeToggleCheckbox.checked = storedTheme === "dark";

    themeToggleCheckbox.addEventListener("change", (event) => {
        const isChecked = event.target.checked;
        const theme = isChecked ? "dark" : "light";
        document.documentElement.setAttribute("data-theme", theme);
        localStorage.setItem("theme", theme);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const loginTab = document.getElementById("login-tab");
    const loginContent = document.getElementById("login-content");
    const daftarTab = document.getElementById("daftar-tab");
    const daftarContent = document.getElementById("daftar-content");

    function toggleTab(tab, content) {
        const isActive = content.dataset.state === "active";
        tab.setAttribute("aria-selected", isActive ? "false" : "true");
        content.dataset.state = isActive ? "inactive" : "active";
        content.hidden = !isActive;
    }

    loginTab.addEventListener("click", function () {
        toggleTab(loginTab, loginContent);
        toggleTab(daftarTab, daftarContent);
    });

    daftarTab.addEventListener("click", function () {
        toggleTab(daftarTab, daftarContent);
        toggleTab(loginTab, loginContent);
    });

    const headerLoginLink = document.getElementById("header-login-link");
    const headerDaftarLink = document.getElementById("header-daftar-link");

    headerLoginLink.addEventListener("click", function (event) {
        event.preventDefault();
        toggleTab(loginTab, loginContent);
    });

    headerDaftarLink.addEventListener("click", function (event) {
        event.preventDefault();
        toggleTab(daftarTab, daftarContent);
    });
});

// core version + navigation, pagination modules:
import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

// init Swiper:
const swiper = new Swiper(".swiper", {
    // configure Swiper to use modules
    modules: [Navigation, Pagination],

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
