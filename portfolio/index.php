<?php
error_reporting(0);
include "../config/config.php";
// print_r($tecknify);exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecknify - Smart Ideas for your Brand are Here</title>
    <link rel="shortcut icon" href="<?php echo $tecknify ?>favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="<?php echo $tecknify ?>portfolio/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cuprum:wght@500;600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="preload" as="image" href="<?php echo $tecknify ?>assets/images/hero-banner.png">

</head>

<body>

    <header class="header" data-header>
        <div class="container">
            <a href="<?php echo $tecknify ?>" class="logo">
                <img src="<?php echo $tecknify ?>assets/images/Tecknify-Logo.png" alt="Tecknify Logo">
            </a>

            <nav class="navbar" data-navbar>
                <div class="wrapper">
                    <a href="<?php echo $tecknify ?>" class="logo">
                        <img src="<?php echo $tecknify ?>assets/images/tecknify-logo1.png" alt="Tecknify Logo">
                    </a>
                    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">
                    <li><a href="<?php echo $tecknify ?>" class="navbar-link" data-nav-link>Home</a></li>
                    <li><a href="<?php echo $tecknify ?>about/" class="navbar-link" data-nav-link>About</a></li>
                    <li class="dropdown">
                        <a href="<?php echo $tecknify ?>service/" class="navbar-link" data-nav-link>Services</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $tecknify ?>service/seo-optimization/" class="dropdown-link">SEO Optimization</a></li>
                            <li><a href="<?php echo $tecknify ?>service/social-media-marketing/" class="dropdown-link">Social Medial Marketing</a></li>
                            <li><a href="<?php echo $tecknify ?>service/ppc-advertising/" class="dropdown-link">PPC Advertising</a></li>
                            <li><a href="<?php echo $tecknify ?>service/web-development/" class="dropdown-link">Web Development</a></li>
                            <li><a href="<?php echo $tecknify ?>service/app-development/" class="dropdown-link">App Development</a></li>
                            <li><a href="<?php echo $tecknify ?>service/content-marketing/" class="dropdown-link">Content Marketing</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $tecknify ?>portfolio/" class="navbar-link" data-nav-link>Portfolio</a></li>
                    <li><a href="<?php echo $tecknify ?>blog" class="navbar-link" data-nav-link>Blog</a></li>
                    <li><a href="<?php echo $tecknify ?>contact/" class="navbar-link" data-nav-link>Contact Us</a></li>
                </ul>
            </nav>

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>

            <a href="tel:+917682064973" class="btn-outline">Let's talk</a>
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
                    <button class="our-portfolio-filter-btn" data-category="Social Media Marketing">Social Media
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
                    <div class="our-portfolio-project" data-category="Social Media Marketing">
                        <img src="<?php echo $tecknify ?>assets/images/Capture1.png" alt="Project 1">
                        <h3>Project 1</h3>
                        <p>Innovative solutions for Social Media Marketing.</p>
                    </div>
                    <div class="our-portfolio-project" data-category="Social Media Marketing">
                        <img src="<?php echo $tecknify ?>assets/images/Capture2.png" alt="Project 2">
                        <h3>Project 2</h3>
                        <p>Boosting your brand through social media marketing.</p>
                    </div>
                    <div class="our-portfolio-project" data-category="PPC Advertising">
                        <img src="<?php echo $tecknify ?>assets/images/Capture3.png" alt="Project 3">
                        <h3>Project 3</h3>
                        <p>Targeted PPC campaigns for measurable results.</p>
                    </div>
                    <div class="our-portfolio-project" data-category="Web Development">
                        <img src="<?php echo $tecknify ?>assets/images/Capture4.png" alt="Project 4">
                        <h3>Project 4</h3>
                        <p>Responsive and dynamic web development solutions.</p>
                    </div>
                    <div class="our-portfolio-project" data-category="App Development">
                        <img src="<?php echo $tecknify ?>assets/images/Capture5.png" alt="Project 5">
                        <h3>Project 5</h3>
                        <p>Custom app development for your business needs.</p>
                    </div>
                    <div class="our-portfolio-project" data-category="Content Marketing">
                        <img src="<?php echo $tecknify ?>assets/images/Capture6.png" alt="Project 6">
                        <h3>Project 6</h3>
                        <p>Content marketing strategies that drive engagement.</p>
                    </div>
                </div>

                <button class="our-portfolio-load-more">Load More</button>
            </div>


            <div class="achievements">
                <h2>Our Achievements</h2>
                <div class="achievement-cards">
                    <div class="achievement-card">
                        <h3 class="counter" data-target="200">0</h3>
                        <p>Projects Completed</p>
                    </div>
                    <div class="achievement-card">
                        <h3 class="counter" data-target="150">0</h3>
                        <p>Clients Served</p>
                    </div>
                    <div class="achievement-card">
                        <h3 class="counter" data-target="10">0</h3>
                        <p>Recording Clients</p>
                    </div>
                </div>
            </div>

        </article>
    </main>


    <div class="social-media-buttons">
        <a href="https://www.facebook.com/tecknifyitsolutions" target="_blank" class="social-icon">
          <img src="<?php echo $tecknify ?>assets/images/facebook-round.png" alt="Facebook">
        </a>
        <a href="https://x.com/tecknify2023" target="_blank" class="social-icon">
          <img src="<?php echo $tecknify ?>assets/images/twitte-round.png" alt="Twitter">
        </a>
        <a href="https://www.instagram.com/tecknify_it_solutions/" target="_blank" class="social-icon">
          <img src="<?php echo $tecknify ?>assets/images/instagram-round.png" alt="Instagram">
        </a>
        <a href="https://www.linkedin.com/company/tecknify-it-solutions" target="_blank" class="social-icon">
          <img src="<?php echo $tecknify ?>assets/images/linkedin-round.png" alt="LinkedIn">
        </a>
        <a href="https://wa.me/9124736030" target="_blank" class="social-icon">
          <img src="<?php echo $tecknify ?>assets/images/whatsapp.png" alt="WhatsApp">
        </a>
        <a href="https://join.skype.com/invite/qrq5q2WScbzT" target="_blank" class="social-icon">
          <img src="<?php echo $tecknify ?>assets/images/skype.png" alt="Skype">
        </a>
      </div>

    <!-- 
    - #FOOTER
  -->

    <footer class="footer">

        <div class="footer-top section">
            <div class="container">

                <div class="footer-brand">

                    <a href="<?php echo $tecknify ?>" class="logo">
                        <img src="<?php echo $tecknify ?>assets/images/tecknify-logo1.png" alt="Tecknify Logo" class="logo-img">
                    </a>

                    <p class="footer-text">
                        We specialise in personalised digital marketing tactics that boost growth and online visibility
                        at Tecknify IT Solutions. Our commitment to quality assures commercial success.
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
                        <a href="<?php echo $tecknify ?>service/seo-optimization/" class="footer-link">SEO Optimization</a>
                    </li>

                    <li>
                        <a href="<?php echo $tecknify ?>service/social-media-marketing/" class="footer-link">Social Media Marketing</a>
                    </li>

                    <li>
                        <a href="<?php echo $tecknify ?>service/web-development/" class="footer-link">Web Development</a>
                    </li>

                    <li>
                        <a href="<?php echo $tecknify ?>service/app-development/" class="footer-link">App Development</a>
                    </li>

                    <li>
                        <a href="<?php echo $tecknify ?>service/ppc-advertising/" class="footer-link">Pay Per Click</a>
                    </li>

                    <li>
                        <a href="<?php echo $tecknify ?>service/content-marketing/" class="footer-link">Content Marketing</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Company</p>
                    </li>

                    <li>
                        <a href="<?php echo $tecknify ?>" class="footer-link">Home</a>
                    </li>

                    <li>
                        <a href="<?php echo $tecknify ?>about/" class="footer-link">About Us</a>
                    </li>

                    <li>
                        <a href="<?php echo $tecknify ?>service/" class="footer-link">Our Services</a>
                    </li>

                    <li>
                        <a href="<?php echo $tecknify ?>blog/" class="footer-link">Our Blog</a>
                    </li>

                    <li>
                        <a href="<?php echo $tecknify ?>portfolio/" class="footer-link">Portfolio</a>
                    </li>

                    <li>
                        <a href="<?php echo $tecknify ?>contact/" class="footer-link">Contact Us</a>
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

                        <a href="tel:+919124736030" class="contact-link">+91 91247 36030</a>
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
                    &copy; 2024 | All Rights Reserved by <a href="<?php echo $tecknify ?>" class="copyright-link">Tecknify</a>
                </p>

                <ul class="footer-bottom-list">

                    <li>
                        <a href="<?php echo $tecknify ?>privacy-policy" class="footer-bottom-link">Privacy Policy</a>
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
    <script src="<?php echo $tecknify ?>portfolio/script.js"></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>