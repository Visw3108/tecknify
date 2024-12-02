'use strict';



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

function openModal() {
  const modal = document.getElementById('modal');
  modal.style.display = 'block';
}

function closeModal() {
  const modal = document.getElementById('modal');
  modal.style.display = 'none';
}

// Close modal when clicking outside of it
window.onclick = function(event) {
  const modal = document.getElementById('modal');
  if (event.target === modal) {
      modal.style.display = 'none';
  }
};


/**
 * accordion toggle
 */

document.addEventListener('DOMContentLoaded', () => {
  const filterButtons = document.querySelectorAll('.our-blogs-filter-btn');
  const blogs = document.querySelectorAll('.our-blogs-project');

  filterButtons.forEach(button => {
      button.addEventListener('click', () => {
          const category = button.getAttribute('data-category');

          // Update active class
          filterButtons.forEach(btn => btn.classList.remove('active'));
          button.classList.add('active');

          // Filter blogs
          blogs.forEach(blog => {
              const blogCategory = blog.getAttribute('data-category');
              if (category === 'all' || blogCategory === category) {
                  blog.style.display = 'block';
              } else {
                  blog.style.display = 'none';
              }
          });
      });
  });

  // Initialize to show all blogs
  filterButtons[0].click();
});





// Intersection Observer for Fade-in-Up Animation
document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll('.fade-in-up');
  
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    });
  
    cards.forEach(card => observer.observe(card));
  });
  