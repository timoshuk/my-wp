window.onload = function() {
  var toggleBtn = document.getElementById("menu-toggle"),
    mainNav = document.querySelector(".menu-hedermenu-container"),
    mainNavLinks = document.querySelectorAll("#primary-menu .menu-item a");

  toggleBtn.addEventListener("click", showMenu);

  [...mainNavLinks].forEach(function(item) {
    item.addEventListener("click", showMenu);
  });

  function showMenu() {
    toggleBtn.classList.toggle("open-m");
    mainNav.classList.toggle("show-nav");
  }
};
