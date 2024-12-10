'use strict';



/**
 * add event on element
 */

/* const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
} */



/**
 * navbar toggle
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
/* window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
}); */



/* HERO */

// Select elements from the DOM
// Selectors for modal elements
const openModalButton = document.getElementById('openModalButton');
const closeModalButton = document.getElementById('closeModalButton');
const modal = document.getElementById('modal');
const proposalForm = document.getElementById('proposalForm');

// Open modal on button click
openModalButton.addEventListener('click', () => {
  modal.style.display = 'block';
});

// Close modal on clicking the close button
closeModalButton.addEventListener('click', () => {
  modal.style.display = 'none';
});

// Close modal when clicking outside of modal content
window.addEventListener('click', (event) => {
  if (event.target === modal) {
    modal.style.display = 'none';
  }
});

// Handle form submission
proposalForm.addEventListener('submit', (event) => {
  event.preventDefault(); // Prevent form from reloading the page

  const name = document.getElementById('nameField').value.trim();
  const email = document.getElementById('emailField').value.trim();
  const description = document.getElementById('businessDescription').value.trim();

  if (name && email && description) {
    alert(`Thank you for your request, ${name}! We'll contact you soon.`);
    modal.style.display = 'none'; // Close the modal
    proposalForm.reset(); // Clear form fields
  } else {
    alert('Please fill out all fields before submitting!');
  }
});



// Function to check if an element is in the viewport
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return rect.top <= window.innerHeight && rect.bottom >= 0;
}

// Function to add the animation class when the element is in view
function onScroll() {
  const heroSection = document.querySelector('.hero');
  if (isInViewport(heroSection)) {
    heroSection.classList.add('animate');
    window.removeEventListener('scroll', onScroll); // Remove the event listener after the animation is applied
  }
}

// Listen for scroll events
window.addEventListener('scroll', onScroll);




document.addEventListener("DOMContentLoaded", function () {
  const animatedElements = document.querySelectorAll("[data-animate]");

  const handleScroll = () => {
    animatedElements.forEach((el) => {
      const rect = el.getBoundingClientRect();
      const isVisible = rect.top < window.innerHeight && rect.bottom > 0;

      if (isVisible) {
        el.classList.add("in-view");
      }
    });
  };

  // Trigger on scroll and load
  window.addEventListener("scroll", handleScroll);
  handleScroll();
});




document.addEventListener("DOMContentLoaded", function () {
  const animatedElements = document.querySelectorAll("[data-animate]");

  const handleScroll = () => {
    animatedElements.forEach((el) => {
      const rect = el.getBoundingClientRect();
      const isVisible = rect.top < window.innerHeight && rect.bottom > 0;

      if (isVisible) {
        el.classList.add("in-view");
      }
    });
  };

  // Trigger on scroll and load
  window.addEventListener("scroll", handleScroll);
  handleScroll();
});




document.addEventListener("DOMContentLoaded", function () {
  const animatedElements = document.querySelectorAll("[data-animate]");

  const handleScroll = () => {
    animatedElements.forEach((el) => {
      const rect = el.getBoundingClientRect();
      const isVisible = rect.top < window.innerHeight && rect.bottom > 0;

      if (isVisible) {
        el.classList.add("in-view");
      }
    });
  };

  // Trigger on scroll and load
  window.addEventListener("scroll", handleScroll);
  handleScroll();
});



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
  const popup = document.getElementById('testimonial-popup');
  const popupImage = document.getElementById('popup-image');
  const popupClose = document.querySelector('.popup-close');

  // Duplicate the cards to create a seamless loop
  cards.forEach((card) => {
    const clone = card.cloneNode(true);
    container.appendChild(clone);
  });

  // Array of image paths for the testimonials
  const testimonialImages = [
    "./assets/images/review-page.jpg", // Image for the first card
    "./assets/images/review-page-2.jpg", // Image for the second card
    "./assets/images/review-page-3.jpg", // Image for the third card
    // Add more images as needed
  ];

  // Add click event to each card
  cards.forEach((card, index) => {
    card.addEventListener('click', () => {
      popupImage.src = testimonialImages[index] || '';
      popup.style.display = 'flex';
    });
  });

  // Close the popup
  popupClose.addEventListener('click', () => {
    popup.style.display = 'none';
  });

  // Close the popup when clicking outside the content
  popup.addEventListener('click', (event) => {
    if (event.target === popup) {
      popup.style.display = 'none';
    }
  });
});





/* ACHIVMENT */


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




// Disable right-click (context menu)
document.addEventListener('contextmenu', function(event) {
  event.preventDefault();
});

// Disable text selection
document.addEventListener('selectstart', function(event) {
  event.preventDefault();
});




