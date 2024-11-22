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




/**
 * accordion toggle
 */

const accordionAction = document.querySelectorAll("[data-accordion-action]");

const toggleAccordion = function () { this.classList.toggle("active"); }

addEventOnElem(accordionAction, "click", toggleAccordion);



 /*----------- PORTFOLIO  -------------*/


// JavaScript to automatically scroll the portfolio carousel and allow for continuous looping

const portfolioTrack = document.querySelector('.portfolio-track');

// Function to reset the carousel position to create a seamless loop
function resetPortfolioCarousel() {
  portfolioTrack.style.transition = 'none';
  portfolioTrack.style.transform = 'translateX(0)';
  setTimeout(() => {
    portfolioTrack.style.transition = 'transform 0.5s ease';
  }, 50);
}

// Function to shift the carousel
function movePortfolioCarousel() {
  const totalWidth = portfolioTrack.scrollWidth;
  const containerWidth = portfolioTrack.parentElement.offsetWidth;

  if (portfolioTrack.scrollLeft + containerWidth >= totalWidth) {
    resetPortfolioCarousel();
  } else {
    portfolioTrack.scrollLeft += 1;
  }
}

// Automatically scroll every 5ms (speed can be adjusted)
setInterval(movePortfolioCarousel, 10);


/*---------------------- TESTIMONILA ------------------------*/

document.addEventListener("DOMContentLoaded", () => {
  const container = document.querySelector('.testimonial-container');
  const cards = document.querySelectorAll('.testimonial-card');
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');
  let currentIndex = 0;

  const moveToCard = (index) => {
    const cardWidth = cards[0].offsetWidth + 20; // Include gap
    const maxIndex = cards.length;

    // Loop carousel
    if (index >= maxIndex) {
      currentIndex = 0;
    } else if (index < 0) {
      currentIndex = maxIndex - 1;
    } else {
      currentIndex = index;
    }

    container.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
  };

  const startAutoScroll = () => {
    setInterval(() => {
      moveToCard(currentIndex + 1);
    }, 3000);
  };

  prevBtn.addEventListener('click', () => {
    moveToCard(currentIndex - 1);
  });

  nextBtn.addEventListener('click', () => {
    moveToCard(currentIndex + 1);
  });

  // Start auto scroll
  startAutoScroll();
});


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





