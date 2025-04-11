let menu = document.querySelector("#menu");
let root = document.documentElement;

window.addEventListener("load", function() {
    menu.classList.toggle("active-menu");
    let p = document.querySelector("p");

    if (menu.classList.contains("active-menu")) {
        root.style.removeProperty("--sidebar-width", 0);
        root.style.removeProperty("--menu-left", "1%");
        p.classList.remove("hide-p");
    }
    else {
        root.style.setProperty("--sidebar-width", 0);
        root.style.setProperty("--menu-left", "1%");
        p.classList.add("hide-p");
    }
});

menu.addEventListener("click", function() {
    menu.classList.toggle("active-menu");
    let p = document.querySelector("p");

    if (menu.classList.contains("active-menu")) {
        root.style.removeProperty("--sidebar-width", 0);
        root.style.removeProperty("--menu-left", "1%");
        p.classList.remove("hide-p");
    }
    else {
        root.style.setProperty("--sidebar-width", 0);
        root.style.setProperty("--menu-left", "1%");
        p.classList.add("hide-p");
    }
});
