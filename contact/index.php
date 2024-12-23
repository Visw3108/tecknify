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

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="<?php echo $tecknify ?>favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="<?php echo $tecknify ?>contact/style.css">

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
  <link rel="preload" as="image" href="<?php echo $tecknify ?>assets/images/hero-banner.png">
  <style>
    .loader {
      border: 4px solid #f3f3f3;
      /* Light grey */
      border-top: 4px solid #3498db;
      /* Blue */
      border-radius: 50%;
      width: 40px;
      height: 40px;
      animation: spin 1s linear infinite;
      margin: 10px auto;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }
  </style>

</head>

<body>

  <!-- 
    - #HEADER
  -->

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
              <li><a href="<?php echo $tecknify ?>service/seo/" class="dropdown-link">Search Engine Optimization</a></li>
              <li><a href="<?php echo $tecknify ?>service/smo/" class="dropdown-link">Social Medial Optimization</a></li>
              <li><a href="<?php echo $tecknify ?>service/ppc/" class="dropdown-link">PPC Advertising</a></li>
              <li><a href="<?php echo $tecknify ?>service/web-development/" class="dropdown-link">Web Development</a></li>
              <li><a href="<?php echo $tecknify ?>service/app-development/" class="dropdown-link">App Development</a></li>
              <li><a href="<?php echo $tecknify ?>service/content-marketing/" class="dropdown-link">Content Marketing</a></li>
            </ul>
          </li>
          <li><a href="<?php echo $tecknify ?>portfolio/" class="navbar-link" data-nav-link>Portfolio</a></li>
          <li><a href="<?php echo $tecknify ?>blog/" class="navbar-link" data-nav-link>Blog</a></li>
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

      <div class="contact-us-wrapper">
        <!-- Contact Form Box -->
        <div class="contact-us-form-box">
          <h2>Get In Touch</h2>
          <form id="contact-us-form" action="#">
            <label for="contact-us-name">Name *</label>
            <input type="text" id="contact-us-name" name="contact-us-name" required>

            <label for="contact-us-email">Email *</label>
            <input type="email" id="contact-us-email" name="contact-us-email" required>

            <label for="contact-us-phone">Phone *</label>
            <input type="text" id="contact-us-phone" name="contact-us-phone" required>

            <label for="contact-us-service">Select Your Service *</label>
            <select id="contact-us-service" name="contact-us-service" required>
              <option value="">Select Service</option>
              <option value="SEO">SEO Optimization</option>
              <option value="Social Media Marketing">Social Media Marketing</option>
              <option value="Web-Dev">Web Development</option>
              <option value="App-Dev">App Development</option>
              <option value="PPC Advertising">PPC Advertising</option>
              <option value="Content Marketing">Content Marketing</option>
            </select>

            <label>Would You Like To Schedule? *</label>
            <div class="contact-us-radio-group">
              <label>
                <input type="radio" name="contact-us-schedule" value="Phone" required> Yes, By Phone
              </label>
              <label>
                <input type="radio" name="contact-us-schedule" value="Zoom" required> Yes, By Zoom!
              </label>
              <label>
                <input type="radio" name="contact-us-schedule" value="Skype" required> Yes, By Skype
              </label>
              <label>
                <input type="radio" name="contact-us-schedule" value="not-yet" required> Not Yet, but can't wait to hear
                back!
              </label>
            </div>

            <label for="contact-us-comment">Comment</label>
            <textarea id="contact-us-comment" name="contact-us-comment"></textarea>

            <button type="submit">Submit</button>
          </form>

          <div id="form-response"></div>
        </div>

        <!-- Contact Info Box -->
        <div class="contact-info-container">
          <div class="contact-info-header">
            <h2>Contact Info</h2>
          </div>
          <div class="contact-info-items">
            <div class="contact-info-item">
              <div class="icon-box">
                <img src="<?php echo $tecknify ?>assets/images/email.png" alt="Mail Icon">
              </div>
              <div class="info-text">
                <h3>Send E-Mail</h3>
                <p>info@tecknify.com</p>
              </div>
            </div>
            <div class="contact-info-item">
              <div class="icon-box">
                <img src="<?php echo $tecknify ?>assets/images/location.png" alt="Location Icon">
              </div>
              <div class="info-text">
                <h3>INDIA Location</h3>
                <p>Plot No.1002/2430, IRC Village, Ps-Nayapalli</p>
              </div>
            </div>
            <div class="contact-info-item">
              <div class="icon-box">
                <img src="<?php echo $tecknify ?>assets/images/telephone.png" alt="Phone Icon">
              </div>
              <div class="info-text">
                <h3>Call Anytime India</h3>
                <p>+91 91247 36030</p>
              </div>
            </div>
            <div class="contact-info-item">
              <div class="icon-box">
                <img src="<?php echo $tecknify ?>assets/images/location.png" alt="Location Icon">
              </div>
              <div class="info-text">
                <h3>USA Location</h3>
                <p>411 University St, Seattle, USA</p>
              </div>
            </div>
            <div class="contact-info-item">
              <div class="icon-box">
                <img src="<?php echo $tecknify ?>assets/images/telephone.png" alt="Phone Icon">
              </div>
              <div class="info-text">
                <h3>Call Anytime USA</h3>
                <p>+1 828 538 4856</p>
              </div>
            </div>
          </div>
          <div class="contact-info-socials">
            <a href="https://www.facebook.com/tecknifyitsolutions" target="_blank"><img src="<?php echo $tecknify ?>assets/images/facebook.png" alt="Facebook Icon"></a>
            <a href="https://www.instagram.com/tecknify_it_solutions/" target="_blank"><img src="<?php echo $tecknify ?>assets/images/instagram.png" alt="Instagram Icon"></a>
          </div>
        </div>
      </div>

      <!-- 
        - #SERVICE
      -->

      <!-- <section class="our-service-section">
        <div class="our-service-header">
          <h1>Explore The Range Of SEO Services We Offer</h1>
          <p>
            As a leading SEO company in India, we bring a complete range of digital marketing services to your business. We ensure that your business site makes it to the first page of Google by using the tried and tested SEO strategies.
          </p>
        </div>
        <div class="our-service-grid">
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="/assets/images/keywords_7773200.png" alt="Keywords Research Icon" />
            </div>
            <h2>Keywords Research</h2>
            <p>
              Using the right keywords is the key to a successful SEO campaign, as it is the power of these keywords that propels your search ranking.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="icons/seo-audit-icon.svg" alt="Website Audit Icon" />
            </div>
            <h2>Website Audit</h2>
            <p>
              SEO audits and optimization are essential for maintaining the website’s online ranking. Experts help identify imperfections that lower rankings.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="icons/traffic-icon.svg" alt="Traffic Generation Icon" />
            </div>
            <h2>Traffic Generation</h2>
            <p>
              Online traffic generation blends marketing tools to generate high traffic for your website, including social media and multimedia SEO.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="icons/analysis-icon.svg" alt="Competitive Analysis Icon" />
            </div>
            <h2>Competitive Analysis</h2>
            <p>
              Competitive analysis is vital to understand the strengths and weaknesses of competitors, helping you choose the best strategies.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="icons/technical-seo-icon.svg" alt="Technical SEO Icon" />
            </div>
            <h2>Technical SEO</h2>
            <p>
              Technical SEO improves crawling, indexing, and fixes issues like duplicate content and page speed for better performance.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="icons/recovery-icon.svg" alt="Search Engine Recovery Icon" />
            </div>
            <h2>Search Engine Recovery</h2>
            <p>
              High-quality content powers top search rankings, and we provide end-to-end SEO services to meet your business goals.
            </p>
          </div>
        </div>
      </section> -->

      <!-------------- PORTFOLIO ------------>

      <!-- <section class="industries-section">
        <div class="industries-content">
          <h2>Industries We Cater To</h2>
          <p>
            rangeMantra as a search engine optimization agency offers customized SEO
            solutions to uplift your brand engagement and visibility across the
            industrial verticals among the wider audience.
          </p>
          <button class="industries-view-all">View All</button>
        </div>
        <div class="industries-carousel-container">
          <div class="industries-carousel">
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="/assets/images/education.jpg" alt="Education">
              <span class="industries-label">Education</span>
            </div>
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="/assets/images/finance.jpg" alt="Finance">
              <span class="industries-label">Finance</span>
            </div>
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="/assets/images/banking.jpg" alt="Banking">
              <span class="industries-label">Banking</span>
            </div>
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="/assets/images/food.jpg" alt="Food and Retail">
              <span class="industries-label">Food and Retail</span>
            </div>
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="/assets/images/healthcare.jpg" alt="Healthcare">
              <span class="industries-label">Healthcare</span>
            </div>
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="/assets/images/technology.jpg" alt="Technology">
              <span class="industries-label">Technology</span>
            </div>
          </div>
        </div>
      </section> -->

      <!-- 
        - #FEATURES
      -->

      <!-- <section class="services-section">
        <div class="services-header">
          <h1>Other SEO Marketing Services We Offer</h1>
          <p>Here are some other business-driven SEO marketing company services to support your unique business needs</p>
        </div>
        <div class="services-grid">
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="/assets/images/marketing_15245336.png" alt="Digital Marketing">
            </div>
            <h3>Digital Marketing</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="icons/content-marketing.svg" alt="Content Marketing">
            </div>
            <h3>Content Marketing</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="icons/email-marketing.svg" alt="Email Marketing">
            </div>
            <h3>Email Marketing</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="icons/orm.svg" alt="ORM Service">
            </div>
            <h3>ORM Service</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="icons/ppc.svg" alt="PPC Service">
            </div>
            <h3>PPC Service</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="icons/aso.svg" alt="ASO">
            </div>
            <h3>ASO</h3>
          </div>
        </div>
      </section> -->

      <!-- 
        - #FAQ
      -->

      <!--   <section class="section faq" aria-label="frequently asked questions">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Discover Frequently Asked Questions?</h2>

            <a href="#" class="btn btn-primary">Work Together</a>
          </div>

          <ul class="grid-list">

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    01. Curious about how to build your own UX strategy? Here are five simple steps.
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae
                    posuere semper, libero ex
                    hendrerit nunc, ac sagittis eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit
                    amet condimentum
                    erat. Pellentesque ultrices sagittis turpis, quis tempus ante viverra et.Morbi aliquam quis quam in
                    luctus. Nullam
                    tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar imperdiet.
                    Sed varius, diam
                    vitae posuere semper.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    02. Where Could a Career in UX Take You? Agency vs. In-House vs. Freelance?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae
                    posuere semper, libero ex
                    hendrerit nunc, ac sagittis eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit
                    amet condimentum
                    erat. Pellentesque ultrices sagittis turpis, quis tempus ante viverra et.Morbi aliquam quis quam in
                    luctus. Nullam
                    tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar imperdiet.
                    Sed varius, diam
                    vitae posuere semper.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    03. What Is a Problem Statement in UX? (And How To Write One?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae
                    posuere semper, libero ex
                    hendrerit nunc, ac sagittis eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit
                    amet condimentum
                    erat. Pellentesque ultrices sagittis turpis, quis tempus ante viverra et.Morbi aliquam quis quam in
                    luctus. Nullam
                    tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar imperdiet.
                    Sed varius, diam
                    vitae posuere semper.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    04. There are several techniques UX designers employ to arrive at a succinct?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae
                    posuere semper, libero ex
                    hendrerit nunc, ac sagittis eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit
                    amet condimentum
                    erat. Pellentesque ultrices sagittis turpis, quis tempus ante viverra et.Morbi aliquam quis quam in
                    luctus. Nullam
                    tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar imperdiet.
                    Sed varius, diam
                    vitae posuere semper.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    05. What are the obstacles users are facing? What are they trying to do?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae
                    posuere semper, libero ex
                    hendrerit nunc, ac sagittis eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit
                    amet condimentum
                    erat. Pellentesque ultrices sagittis turpis, quis tempus ante viverra et.Morbi aliquam quis quam in
                    luctus. Nullam
                    tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar imperdiet.
                    Sed varius, diam
                    vitae posuere semper.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section> -->


      <div class="marketing-section">
        <div class="content">
          <h1>Ready to speak with a marketing expert?</h1>

          <div class="stats">
            <div class="stat-item">
              <h2 data-target="1865">0</h2>
              <p>Websites Launched</p>
            </div>
            <div class="stat-item">
              <h2 data-target="29">0</h2>
              <p>Marketing Experts</p>
            </div>
            <div class="stat-item">
              <h2 data-target="204533">0</h2>
              <p>Hours of Dedicated Work</p>
            </div>
          </div>

          <div class="action-buttons">

            <a href="#lets-talk" class="btn-talk">Let's Talk</a>
          </div>
        </div>

        <div class="image">
          <img src="a<?php echo $tecknify ?>ssets/images/about-banner.png" alt="Marketing Expert" />
        </div>
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

          <a href="<?php echo $tecknify ?>" class="logo">
            <img src="<?php echo $tecknify ?>assets/images/tecknify-logo1.png" alt="Tecknify Logo" class="logo-img">
          </a>

          <p class="footer-text">
            We specialise in personalised digital marketing tactics that boost growth and online visibility at Tecknify
            IT Solutions. Our commitment to quality assures commercial success.
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Enter your email" required class="email-field">
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
            <a href="<?php echo $tecknify ?>service/seo/" class="footer-link">Search Engine Optimization</a>
          </li>

          <li>
            <a href="<?php echo $tecknify ?>service/smo/" class="footer-link">Social Media Optimization</a>
          </li>

          <li>
            <a href="<?php echo $tecknify ?>service/web-development/" class="footer-link">Web Development</a>
          </li>

          <li>
            <a href="<?php echo $tecknify ?>service/app-development/" class="footer-link">App Development</a>
          </li>

          <li>
            <a href="<?php echo $tecknify ?>service/ppc/" class="footer-link">Pay Per Click</a>
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
                <a href="https://www.facebook.com/tecknifyitsolutions" class="social-link" target="_blank">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="https://x.com/tecknify2023" class="social-link" target="_blank">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="https://www.instagram.com/tecknify_it_solutions/" class="social-link" target="_blank">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

              <li>
                <a href="https://www.linkedin.com/company/tecknify-it-solutions" class="social-link" target="_blank">
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
  <script src="<?php echo $tecknify ?>contact/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $("#contact-us-form").on("submit", function (e) {
        e.preventDefault(); // Prevent default form submission

        // Collect form data
        var formData = $(this).serialize(); // Serialize form data into URL-encoded string

        // Display loader in the form-response div
        $("#form-response").html('<div class="loader"></div>');

        // Send data via AJAX
        $.ajax({
          type: "POST",
          url: "submitForm.php", // PHP script to process the form
          data: formData,
          success: function (response) {
            // Display success message and remove loader
            $("#form-response").html(`<p style="color: green;">${response}</p>`);
            $("#contact-us-form")[0].reset(); // Reset the form
          },
          error: function () {
            // Display error message and remove loader
            $("#form-response").html('<p style="color: red;">An error occurred. Please try again.</p>');
          },
        });
      });
    });
  </script>

</body>

</html>