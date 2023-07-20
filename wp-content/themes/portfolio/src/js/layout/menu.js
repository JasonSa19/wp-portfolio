const flyOutMenu = () => {
  document.addEventListener('DOMContentLoaded', function () {
    // Get references to the button and the menu-outer div
    const navbarToggler = document.getElementById('navbar-toggler');
    const menuOuter = document.getElementById('main-menu-wrap');
    const header = document.getElementById('header');

    if (menuOuter) {
      navbarToggler.addEventListener('click', function () {
        menuOuter.classList.toggle('active');
        navbarToggler.classList.toggle('active');
        header.classList.toggle('open-nav');
      });
    }
  });
};

export { flyOutMenu };
