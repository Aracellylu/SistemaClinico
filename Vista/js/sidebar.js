document.getElementById("toggleSidebar").addEventListener("click", function() {
    document.getElementById("sidebar").classList.toggle("collapsed");
    document.querySelector(".content").classList.toggle("collapsed");
});
