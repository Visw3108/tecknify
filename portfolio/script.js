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
    const filterButtons = document.querySelectorAll('.our-portfolio-filter-btn');
    const projects = document.querySelectorAll('.our-portfolio-project');
    const loadMoreButton = document.querySelector('.our-portfolio-load-more');
    let itemsToShow = 6;
  
    // Filter functionality
    filterButtons.forEach(button => {
      button.addEventListener('click', () => {
        const category = button.getAttribute('data-category');
  
        // Update active class
        filterButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
  
        // Filter projects
        projects.forEach(project => {
          project.classList.add('hidden');
          if (category === 'all' || project.getAttribute('data-category') === category) {
            project.classList.remove('hidden');
          }
        });
  
        // Reset load more
        itemsToShow = 6;
        updateProjects();
      });
    });
  
    // Load more functionality
    loadMoreButton.addEventListener('click', () => {
      itemsToShow += 6;
      updateProjects();
    });
  
    // Update visible projects based on itemsToShow
    function updateProjects() {
      let visibleItems = 0;
      projects.forEach(project => {
        if (!project.classList.contains('hidden')) {
          if (visibleItems < itemsToShow) {
            project.style.display = 'block';
            visibleItems++;
          } else {
            project.style.display = 'none';
          }
        } else {
          project.style.display = 'none';
        }
      });
  
      // Hide "Load More" button if no more items to show
      const totalVisible = Array.from(projects).filter(
        project => !project.classList.contains('hidden')
      ).length;
      loadMoreButton.style.display = visibleItems >= totalVisible ? 'none' : 'block';
    }
  
    // Initialize
    updateProjects();
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
  