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



document.addEventListener("DOMContentLoaded", () => {
  const stats = document.querySelectorAll(".stat-item h2");
  const marketingSection = document.querySelector(".marketing-section");

  const animateCount = (el) => {
    const target = parseInt(el.getAttribute("data-target"));
    const speed = 3000; // Duration of the animation (in milliseconds)
    const increment = Math.ceil(target / (speed / 60)); // Determines how much to increment on each frame

    const updateCount = () => {
      const current = parseInt(el.innerText);
      if (current < target) {
        el.innerText = current + increment > target ? target : current + increment;
        requestAnimationFrame(updateCount);
      } else {
        el.innerText = target;
      }
    };

    el.style.opacity = 1;
    updateCount();
  };

  // Set up an IntersectionObserver to detect when the section is in view
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Trigger the animation when the section comes into view
        stats.forEach(stat => animateCount(stat));
        observer.unobserve(entry.target); // Stop observing after the animation runs
      }
    });
  }, {
    threshold: 0.5 // Trigger when 50% of the section is in the viewport
  });

  // Start observing the marketing section
  observer.observe(marketingSection);
});