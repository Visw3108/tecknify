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


/* HERO */

// Select elements from the DOM
const inputField = document.querySelector('.modern-input');
const submitButton = document.querySelector('.modern-submit');

// Event listener for the submit button
submitButton.addEventListener('click', () => {
  const websiteAddress = inputField.value.trim(); // Get and trim the input value

  if (websiteAddress) {
    // If input is not empty, display the entered value
    alert(`Thank you! We will analyze: ${websiteAddress}`);
  } else {
    // If input is empty, show an error message
    alert('Please enter a valid website address!');
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

const accordionAction = document.querySelectorAll("[data-accordion-action]");

const toggleAccordion = function () { this.classList.toggle("active"); }

addEventOnElem(accordionAction, "click", toggleAccordion);



 /*----------- PORTFOLIO  -------------*/

 const portfolioCarousel = document.querySelector('.portfolio-carousel');
 const portfolioTrack = document.querySelector('.portfolio-track');
 const portfolioCards = document.querySelectorAll('.portfolio-card');
 
 // Duplicate cards to create an infinite loop
 portfolioCards.forEach(card => {
   const clone = card.cloneNode(true);
   portfolioTrack.appendChild(clone);
 });
 
 let isHovered = false; // Track hover state
 let scrollAmount = 0; // Track current scroll position
 
 // Scroll the carousel continuously
 function scrollCarousel() {
   if (!isHovered) {
     scrollAmount += 1;
     const totalScrollWidth = portfolioTrack.scrollWidth / 2;
 
     // Reset scroll to the beginning when reaching the end
     if (scrollAmount >= totalScrollWidth) {
       scrollAmount = 0;
       portfolioTrack.style.transition = 'none'; // Disable transition for reset
       portfolioTrack.style.transform = `translateX(0px)`;
     } else {
       portfolioTrack.style.transition = 'transform 0.05s linear'; // Smooth scrolling
       portfolioTrack.style.transform = `translateX(-${scrollAmount}px)`;
     }
   }
 
   requestAnimationFrame(scrollCarousel); // Smooth loop
 }
 
 // Start scrolling
 scrollCarousel();
 
 // Stop scrolling on hover
 portfolioCarousel.addEventListener('mouseenter', () => {
   isHovered = true;
 });
 
 // Resume scrolling when hover ends
 portfolioCarousel.addEventListener('mouseleave', () => {
   isHovered = false;
 });
 


/*---------------------- TESTIMONILA ------------------------*/
document.addEventListener("DOMContentLoaded", () => {
  const container = document.querySelector('.testimonial-container');
  const cards = [...document.querySelectorAll('.testimonial-card')];

  // Duplicate the cards to create a seamless loop
  cards.forEach((card) => {
    const clone = card.cloneNode(true);
    container.appendChild(clone);
  });
});




/* ACHIVMENT */


document.addEventListener("DOMContentLoaded", () => {
  const stats = document.querySelectorAll(".stat-item h2");

  const animateCount = (el) => {
    const target = parseInt(el.getAttribute("data-target"));
    const speed = 200; // Speed of animation in milliseconds
    const increment = Math.ceil(target / speed);

    const updateCount = () => {
      const current = parseInt(el.innerText);
      if (current < target) {
        el.innerText = current + increment > target ? target : current + increment;
        requestAnimationFrame(updateCount);
      } else {
        el.innerText = target;
      }
    };

    updateCount();
  };

  stats.forEach((stat) => animateCount(stat));
});




// footer.js
document.addEventListener("DOMContentLoaded", () => {
  // Select the placeholder element where the footer will be loaded
  const footerPlaceholder = document.getElementById("footer-placeholder");

  // Fetch the footer.html file and insert its content
  fetch("footer.html")
    .then(response => {
      if (!response.ok) {
        throw new Error("Failed to load footer.");
      }
      return response.text();
    })
    .then(html => {
      footerPlaceholder.innerHTML = html;
    })
    .catch(error => {
      console.error("Error loading the footer:", error);
    });
});


