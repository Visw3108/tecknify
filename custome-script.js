/**
 * add event on element
 */

const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
}



/**
 * navbar toggle
 */

const navbar = document.querySelector("[data-navbar]");
const navToggler = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
}

addEventOnElem(navToggler, "click", toggleNavbar);



/**
 * close navbar when click on any navbar links
 */

const navLinks = document.querySelectorAll("[data-nav-link]");

const closeNavbar = function () {
  navbar.classList.remove("active");
  overlay.classList.remove("active");
}

addEventOnElem(navLinks, "click", closeNavbar);



/**
 * header active when scroll down
 */

// Add scroll effect to header
const header = document.querySelector('.header');

window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});


document.querySelectorAll('.dropdown > .navbar-link').forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault();

    const dropdownMenu = this.nextElementSibling;
    if (dropdownMenu) {
      const isActive = dropdownMenu.classList.contains('active');

      // Close all other dropdowns
      document.querySelectorAll('.dropdown-menu.active').forEach(menu => {
        menu.classList.remove('active');
      });

      // Toggle the current dropdown
      if (!isActive) {
        dropdownMenu.classList.add('active');
      }
    }
  });
});