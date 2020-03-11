window.addEventListener("load", () => {
    document.querySelectorAll(".nav-item").forEach(e => {
        var origin = window.location.origin;
        var route = window.location.pathname.split("/");
        route = route.slice(0, 3);
        route = origin + route.join("/");
        if (e.querySelector("a.nav-link").href == route) {
            e.classList.add("active");
        }
    });
});
