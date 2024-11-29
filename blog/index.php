<?php
include("../config/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecknify - Smart Ideas for your Brand are Here</title>

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="/favicon.svg" type="image/svg+xml">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="style.css">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cuprum:wght@500;600;700&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- 
    - preload images
  -->
    <link rel="preload" as="image" href="./assets/images/hero-banner.png">

</head>

<body>

    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">
            <a href="/" class="logo">
                <img src="/assets/images/Tecknify-Logo.png" alt="Hoolix Logo">
            </a>

            <nav class="navbar" data-navbar>
                <div class="wrapper">
                    <a href="#" class="logo">
                        <img src="/assets/images/Tecknify-Logo.png" alt="Hoolix Logo">
                    </a>
                    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">
                    <li><a href="/" class="navbar-link" data-nav-link>Home</a></li>
                    <li><a href="/about/" class="navbar-link" data-nav-link>About</a></li>
                    <li class="dropdown">
                        <a href="/service/" class="navbar-link" data-nav-link>Services</a>
                        <ul class="dropdown-menu">
                            <li><a href="/service/seo/" class="dropdown-link">Social Medial Optimization</a></li>
                            <li><a href="/service/smo/" class="dropdown-link">Social Medial Marketing</a></li>
                            <li><a href="/service/ppc/" class="dropdown-link">PPC Advertising</a></li>
                            <li><a href="/service/web-development/" class="dropdown-link">Web Development</a></li>
                            <li><a href="/service/app-development/" class="dropdown-link">App Development</a></li>
                            <li><a href="/service/content-marketing/" class="dropdown-link">Content Marketing</a></li>
                        </ul>
                    </li>
                    <li><a href="/portfolio/" class="navbar-link" data-nav-link>Portfolio</a></li>
                    <li><a href="#" class="navbar-link" data-nav-link>Blog</a></li>
                    <li><a href="/contact/" class="navbar-link" data-nav-link>Contact Us</a></li>
                </ul>
            </nav>

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>

            <a href="#" class="btn-outline">Let's talk</a>
            <div class="overlay" data-nav-toggler data-overlay></div>
        </div>
    </header>

    <main>
        <article>

            <!-- 
        - #HERO
      -->

            <section class="digital-marketing">
                <div class="container">
                    <h1>Digital Marketing Services</h1>
                    <p>Grow Your Client Base With Data-Driven and Targeted Strategies</p>
                    <form class="proposal-form">
                        <input type="text" placeholder="Enter Website Address" required>
                        <button type="submit">GET MY FREE PROPOSAL</button>
                    </form>

                    <!-- Input group link for users without a site -->
                    <div class="input-group-link">
                        <p class="no-site-text">
                            Don't have a site?
                            <button class="simple-text-button" onclick="openModal()">Click Here</button>
                        </p>
                    </div>
                </div>
            </section>

            <!-- Modal for additional form -->
            <div id="modal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <h2>Request a Proposal Without a Website</h2>
                    <form class="proposal-form-without-site">
                        <input type="text" placeholder="Your Name" required>
                        <input type="email" placeholder="Your Email" required>
                        <textarea placeholder="Describe Your Business" required></textarea>
                        <button type="submit">Request Proposal</button>
                    </form>
                </div>
            </div>

            <div class="our-portfolio-container">
                <!-- Categories Section -->
                <div class="our-portfolio-categories">
                    <button class="our-portfolio-filter-btn active" data-category="all">All</button>
                    <button class="our-portfolio-filter-btn" data-category="Social Media Optimization">Social Media
                        Optimization</button>
                    <button class="our-portfolio-filter-btn" data-category="Social Media Marketing">Social Media
                        Marketing</button>
                    <button class="our-portfolio-filter-btn" data-category="PPC Advertising">PPC Advertising</button>
                    <button class="our-portfolio-filter-btn" data-category="Web Development">Web Development</button>
                    <button class="our-portfolio-filter-btn" data-category="App Development">App Development</button>
                    <!-- <button class="our-portfolio-filter-btn" data-category="Content Marketing">Content Marketing</button> -->
                </div>

                <!-- Projects Section -->
                <div class="our-portfolio-projects">
                    <div class="our-portfolio-project" data-category="Social Media Optimization">
                        <img src="/assets/images/Capture1.png" alt="Project 1">
                        <h3>Project 1</h3>
                        <p>Innovative solutions for social media optimization.</p>
                    </div>
                    <div class="our-portfolio-project" data-category="Social Media Marketing">
                        <img src="/assets/images/Capture2.png" alt="Project 2">
                        <h3>Project 2</h3>
                        <p>Boosting your brand through social media marketing.</p>
                    </div>
                    <div class="our-portfolio-project" data-category="PPC Advertising">
                        <img src="/assets/images/Capture3.png" alt="Project 3">
                        <h3>Project 3</h3>
                        <p>Targeted PPC campaigns for measurable results.</p>
                    </div>
                    <div class="our-portfolio-project" data-category="Web Development">
                        <img src="/assets/images/Capture4.png" alt="Project 4">
                        <h3>Project 4</h3>
                        <p>Responsive and dynamic web development solutions.</p>
                    </div>
                    <div class="our-portfolio-project" data-category="App Development">
                        <img src="/assets/images/Capture5.png" alt="Project 5">
                        <h3>Project 5</h3>
                        <p>Custom app development for your business needs.</p>
                    </div>
                    <div class="our-portfolio-project" data-category="Content Marketing">
                        <img src="/assets/images/Capture6.png" alt="Project 6">
                        <h3>Project 6</h3>
                        <p>Content marketing strategies that drive engagement.</p>
                    </div>
                </div>

                <button class="our-portfolio-load-more">Load More</button>
            </div>

        </article>
    </main>

    <!-- 
    - #FOOTER
  -->

    <footer class="footer">

        <div class="footer-top section">
            <div class="container">

                <div class="footer-brand">

                    <a href="#" class="logo">
                        <img src="/assets/images/tecknify-logo1.png" alt="Hoolix Logo" class="logo-img">
                    </a>

                    <p class="footer-text">
                        Lorem ipsum dolor sit amet consecte tur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore.
                    </p>

                    <form action="" class="newsletter-form">
                        <input type="email" name="email_address" placeholder="Enter your email" required
                            class="email-field">
                        <button type="submit" class="form-btn">
                            <ion-icon name="paper-plane" aria-hidden="true"></ion-icon>
                        </button>
                    </form>
                    <div id="response-message"></div>

                </div>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Our Services</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Strategy & Research</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Web Development</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Web Solution</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Digital Merketing</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">App Design</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">App Development</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Company</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">About Company</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Our Services</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Our Portfolio</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Our Blog</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Latest News</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Contact Us</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Contact Us</p>
                    </li>

                    <li class="footer-item">
                        <ion-icon name="location" aria-hidden="true"></ion-icon>

                        <address class="contact-link address">
                            Plot No.1002/2430, 1st floor, N1-341, IRC Village, Nayapalli, Bhubaneswar, Odisha, 751015
                        </address>
                    </li>

                    <li class="footer-item">
                        <ion-icon name="call" aria-hidden="true"></ion-icon>

                        <a href="tel:+91 91247 36030" class="contact-link">+91 91247 36030</a>
                    </li>

                    <li class="footer-item">
                        <ion-icon name="mail" aria-hidden="true"></ion-icon>

                        <a href="mailto:info@tecknify.com" class="contact-link">info@tecknify.com</a>
                    </li>

                    <li class="footer-item">
                        <ul class="social-list">

                            <li>
                                <a href="https://www.facebook.com/tecknifyitsolutions" class="social-link"
                                    target="_blank">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="https://x.com/tecknify2023" class="social-link" target="_blank">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/tecknify_it_solutions/" class="social-link"
                                    target="_blank">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.linkedin.com/company/tecknify-it-solutions" class="social-link"
                                    target="_blank">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">

                <p class="copyright">
                    &copy; 2022 | All Rights Reserved by <a href="#" class="copyright-link">Tecknify</a>
                </p>

                <ul class="footer-bottom-list">

                    <li>
                        <a href="#" class="footer-bottom-link">Privacy Policy</a>
                    </li>

                    <li>
                        <a href="#" class="footer-bottom-link">Terms of Use</a>
                    </li>

                    <li>
                        <a href="#" class="footer-bottom-link">Site Map</a>
                    </li>

                </ul>

            </div>
        </div>

    </footer>

    <!-- 
    - custom js link
  -->
    <script src="script.js"></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>