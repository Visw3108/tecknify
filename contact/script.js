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

const accordionAction = document.querySelectorAll("[data-accordion-action]");

const toggleAccordion = function () { this.classList.toggle("active"); }

addEventOnElem(accordionAction, "click", toggleAccordion);



 /*----------- PORTFOLIO  -------------*/





const industriesCarousel = document.querySelector(".industries-carousel");
let industriesScrollInterval;
let industriesScrollPosition = 0;

// Auto-scroll functionality
function startIndustriesAutoScroll() {
  industriesScrollInterval = setInterval(() => {
    industriesScrollPosition += industriesCarousel.offsetWidth / 4;
    if (industriesScrollPosition >= industriesCarousel.scrollWidth - industriesCarousel.offsetWidth) {
      industriesScrollPosition = 0; // Reset scroll position
    }
    industriesCarousel.style.transform = `translateX(-${industriesScrollPosition}px)`;
  }, 3000);
}

// Stop auto-scroll on hover
industriesCarousel.addEventListener("mouseenter", () => clearInterval(industriesScrollInterval));
industriesCarousel.addEventListener("mouseleave", startIndustriesAutoScroll);

// Start auto-scroll on page load
startIndustriesAutoScroll();

// Fade-in-Up Effect on Scroll
document.addEventListener("DOMContentLoaded", () => {
  const industriesItems = document.querySelectorAll(".industries-fade-in-up");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    },
    { threshold: 0.1 }
  );

  industriesItems.forEach((item) => {
    observer.observe(item);
  });
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
  