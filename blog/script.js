'use strict';



/**
 * add event on element
 */
const header = document.querySelector('.header');

window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});

document.querySelectorAll('.dropdown > .navbar-link').forEach((link) => {
  link.addEventListener('click', function (e) {
    e.preventDefault(); // Prevent immediate navigation

    const dropdownMenu = this.nextElementSibling;
    const isActive = dropdownMenu.classList.contains('active');

    // If the link is clicked, navigate to the service page immediately
    window.location.href = this.href;

    // Open dropdown if it's not active
    if (!isActive) {
      document.querySelectorAll('.dropdown-menu.active').forEach((menu) => {
        menu.classList.remove('active');
      });
      dropdownMenu.classList.add('active');
    }
  });

  // Close dropdown when clicking outside
  document.addEventListener('click', (event) => {
    const dropdownMenu = link.nextElementSibling; // Get the corresponding dropdown menu
    if (!link.contains(event.target) && !dropdownMenu.contains(event.target)) {
      dropdownMenu.classList.remove('active');
    }
  });
});

const navbar = document.querySelector("[data-navbar]");
const navToggler = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
}

const addEventOnElem = (elements, event, handler) => {
  elements.forEach((element) => {
    element.addEventListener(event, handler);
  });
};

addEventOnElem(navToggler, "click", toggleNavbar);

/**
 * Close navbar when clicking on any navbar link
 */
const navLinks = document.querySelectorAll("[data-nav-link]");

const closeNavbar = function () {
  navbar.classList.remove("active");
  overlay.classList.remove("active");
}

addEventOnElem(navLinks, "click", closeNavbar);

/**
 * Header active when scroll down
 */

// Add scroll effect to header
window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
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
  