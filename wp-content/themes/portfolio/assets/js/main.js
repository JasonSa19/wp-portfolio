const flyOutMenu = () => {
  document.addEventListener("DOMContentLoaded", function() {
    const navbarToggler = document.getElementById("navbar-toggler");
    const menuOuter = document.getElementById("main-menu-wrap");
    const header = document.getElementById("header");
    if (menuOuter) {
      navbarToggler.addEventListener("click", function() {
        menuOuter.classList.toggle("active");
        navbarToggler.classList.toggle("active");
        header.classList.toggle("open-nav");
      });
    }
  });
};
flyOutMenu();
//# sourceMappingURL=main.js.map
