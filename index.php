<?php
error_reporting(0);
include "config/config.php";
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
  <link rel="stylesheet" href="<?php echo $tecknify ?>style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cuprum:wght@500;600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="preload" as="image" href="<?php echo $tecknify ?>assets/images/hero-banner.png">

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
              <li><a href="<?php echo $tecknify ?>service/seo-optimization/" class="dropdown-link">Search Engine Optimization</a></li>
              <li><a href="<?php echo $tecknify ?>service/social-media-marketing/" class="dropdown-link">Social Medial Marketing</a></li>
              <li><a href="<?php echo $tecknify ?>service/ppc-advertising/" class="dropdown-link">PPC Advertising</a></li>
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

      <section class="section hero" id="home" aria-label="hero">
        <div class="container">
          <div class="hero-content">
            <p class="hero-subtitle has-before">-Welcome to Our Agency-</p>
            <h1 class="h1 hero-title">Smart Ideas For Your Brand Are Here</h1>
            <p class="hero-text">
              Welcome to Tecknify IT Solution, a leading Digital Marketing Company in USA dedicated to fulfilling all your digital requirements. We offer exceptional Digital Marketing Services in USA at competitive pricing options, tailored to assist your business in reaching its goals. We are a full-service 360° digital branding company, that provides a comprehensive array of solutions designed for enhancing your online presence as well as driving success. We are here to assist you in enhancing your brand and achieving greater success in the digital landscape.
            </p>

            <!-- Website Address Form -->
            <div class="input-group modern">
              <input type="text" class="input-field modern-input" id="website_address"
                placeholder="Enter Website Address" aria-label="Website Address" />
              <button class="btn modern-submit" onclick="submitWebsiteAddress()">GET MY FREE PROPOSAL</button>
            </div>

            <!-- Contact Form -->
            <div class="input-group-link">
              <p class="no-site-text">
                Don't have a site?
                <button class="simple-text-button" id="openModalButton">Click Here</button>
              </p>
            </div>

            <div class="partner-logos">
              <img src="<?php echo $tecknify ?>assets/images/logo1.png" alt="Inc 5000" class="certificate-logo" />
              <img src="<?php echo $tecknify ?>assets/images/logo2.png" alt="Google Partner" class="certificate-logo" />
              <img src="<?php echo $tecknify ?>assets/images/logo3.png" alt="Microsoft Advertising Partner" class="certificate-logo" />
              <img src="<?php echo $tecknify ?>assets/images/logo4.png" alt="Meta Business Partner" class="certificate-logo" />
              <img src="<?php echo $tecknify ?>assets/images/logo5.png" alt="IFA Member" class="certificate-logo" />
            </div>
          </div>

          <figure class="hero-banner has-before img-holder" style="--width: 650; --height: 650;">
            <img src="<?php echo $tecknify ?>assets/images/hero-banner.png" width="650" height="650" alt="hero banner" class="img-cover" />
          </figure>
        </div>

        </div>

        <!-- Modal Form -->

      </section>


      <!-- Modal Form for Contact -->
      <div id="modal" class="modal">
        <div class="modal-content">
          <span class="close" id="closeModalButton">&times;</span>
          <h2>Request a Proposal Without a Website</h2>
          <form class="proposal-form-without-site" id="proposalForm">
            <input type="text" placeholder="Your Name" name="name" id="nameField" required />
            <input type="email" placeholder="Your Email" name="email" id="emailField" required />
            <textarea placeholder="Describe Your Business" name="message" id="messageField" required></textarea>
            <button type="submit">Request Proposal</button>
          </form>
          <div id="responseMessage"></div>
          <!-- For displaying success or error messages -->
        </div>
      </div>



      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner" data-animate="fade-in-right">
            <img src="<?php echo $tecknify ?>assets/images/about-banner.png" width="802" height="654" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content" data-animate="fade-in-left">
            <h2 class="h2-sm section-title">Make Your Brand Stand Out Of The Crowd</h2>

            <p class="section-text">
              At Tecknify IT Solutions, we offer a wide range of services to cater to all your digital needs. Our services include Web Designing, Web Development, Search Engine Optimization, Pay Per Click, Social Media Marketing and Content Marketing services. Whether you are a small, medium or large business, we have the perfect website design and development packages for you at cost-effective rates.
            </p>
            <p class="section-text">
              As the Best Digital Marketing Company in USA that helps companies stand out, we are not your go to branding company. We collaborate with driven enterprises to optimise their marketing initiatives and achieve quantifiable outcomes. Through the integration of creativity, passion and data-driven strategies, we achieve impactful outcomes. Tecknify IT Solutions has built a strong reputation as a leading Digital Advertising Company in USA through years of experience. Our mission is to develop and enhance brands that exude vitality and enthusiasm, enabling them to succeed in the digital environment.
            </p>

            <!-- <ul class="about-list">
              <li class="has-before">Price of additional materials or parts (if needed)</li>
              <li class="has-before">Transportation cost for carrying new materials/parts</li>
              <li class="has-before">You will get 100% money back offer.</li>
            </ul> -->

            <div class="btn-group">
              <a href="#" class="btn btn-primary">Know More</a>
            </div>
          </div>

        </div>
      </section>

      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="services" aria-label="service">
        <div class="container">

          <p class="section-subtitle text-center">-What We Offer-</p>
          <h2 class="h2 section-title text-center">Our Creative Services</h2>
          <p class="section-text text-center">
            Get the most of reduction in your team’s operating costs for the whole product which creates amazing UI/UX
            experiences.
          </p>

          <ul class="grid-list">
            <li>
              <div class="service-card has-after" data-animate="fade-in-right">
                <figure class="card-icon">
                  <img src="<?php echo $tecknify ?>assets/images/service-1.png" width="140" height="140" loading="lazy"
                    alt="UI/UX Creative Design" class="img">
                </figure>
                <div class="card-content">
                  <h3 class="h3 card-title">Search Engine Optimization</h3>
                  <p class="card-text">
                    We specialise in personalised digital marketing tactics that boost growth and online visibility at
                    Tecknify IT Solutions. Our commitment to quality assures commercial success.
                  </p>
                  <a href="<?php echo $tecknify ?>service/seo-optimization/" class="btn-link">
                    <span class="span">Read More</span>
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>
              </div>
            </li>
            <li>
              <div class="service-card has-after" data-animate="fade-in-left">
                <figure class="card-icon">
                  <img src="<?php echo $tecknify ?>assets/images/service-2.png" width="140" height="140" loading="lazy" alt="App Development"
                    class="img">
                </figure>
                <div class="card-content">
                  <h3 class="h3 card-title">Social Media Marketing</h3>
                  <p class="card-text">
                    Enhance your brand’s presence across social platforms with tailored strategies.
                  </p>
                  <a href="<?php echo $tecknify ?>service/social-media-marketing/" class="btn-link">
                    <span class="span">Read More</span>
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>
              </div>
            </li>
            <li>
              <div class="service-card has-after" data-animate="fade-in-right">
                <figure class="card-icon">
                  <img src="<?php echo $tecknify ?>assets/images/service-3.png" width="140" height="140" loading="lazy"
                    alt="Professional Content Writer" class="img">
                </figure>
                <div class="card-content">
                  <h3 class="h3 card-title">Content Marketing</h3>
                  <p class="card-text">
                    Engage audiences with valuable content that drives traffic and conversions.
                  </p>
                  <a href="<?php echo $tecknify ?>service/content-marketing/" class="btn-link">
                    <span class="span">Read More</span>
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>
              </div>
            </li>
            <li>
              <div class="service-card has-after" data-animate="fade-in-left">
                <figure class="card-icon">
                  <img src="<?php echo $tecknify ?>assets/images/service-4.png" width="140" height="140" loading="lazy" alt="Graphic Design"
                    class="img">
                </figure>
                <div class="card-content">
                  <h3 class="h3 card-title">Web Development</h3>
                  <p class="card-text">
                    Enhance your brand’s presence across social platforms with tailored strategies.
                  </p>
                  <a href="<?php echo $tecknify ?>service/web-development/" class="btn-link">
                    <span class="span">Read More</span>
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>
              </div>
            </li>
          </ul>

          <a href="<?php echo $tecknify ?>service/" class="btn btn-primary">Get Started</a>

        </div>
      </section>


      <!-------------- PORTFOLIO ------------>

      <section class="portfolio-section" id="portfolio">
        <div class="portfolio-container">
          <p class="section-subtitle text-center">-Portfolio-</p>
          <h2 class="portfolio-section-title">Take a Glimpse of Our Valuable
            Client</h2>

          <div class="portfolio-carousel">
            <div class="portfolio-track">
              <div class="portfolio-card">
                <img src="<?php echo $tecknify ?>assets/images/Capture2.png" alt="Project 1" class="portfolio-img" />
                <div class="portfolio-card-content">
                  <h3 class="portfolio-card-title">Nootropic Blend</h3>
                  <a href="https://nootropicblend.com/" class="portfolio-learn-more-btn" target="_blank">Learn More
                    →</a>
                </div>
              </div>
              <div class="portfolio-card">
                <img src="<?php echo $tecknify ?>assets/images/Capture1.png" alt="Project 2" class="portfolio-img" />
                <div class="portfolio-card-content">
                  <h3 class="portfolio-card-title">Impact Training Services</h3>
                  <a href="https://impacttrainingservices.com/" class="portfolio-learn-more-btn" target="_blank">Learn
                    More
                    →</a>
                </div>
              </div>
              <div class="portfolio-card">
                <img src="<?php echo $tecknify ?>assets/images/Capture3.png" alt="Project 3" class="portfolio-img" />
                <div class="portfolio-card-content">
                  <h3 class="portfolio-card-title">In Motion Video</h3>
                  <a href="https://www.bestbaltimoreweddingvideography.com/ " class="portfolio-learn-more-btn"
                    target="_blank">Learn More
                    →</a>
                </div>
              </div>
              <div class="portfolio-card">
                <img src="<?php echo $tecknify ?>assets/images/Capture4.png" alt="Project 4" class="portfolio-img" />
                <div class="portfolio-card-content">
                  <h3 class="portfolio-card-title">Villa Madonnina</h3>
                  <a href="https://amalfi-villa.com/ " class="portfolio-learn-more-btn" target="_blank">Learn More
                    →</a>
                </div>
              </div>
              <div class="portfolio-card">
                <img src="<?php echo $tecknify ?>assets/images/Capture5.png" alt="Project 5" class="portfolio-img" />
                <div class="portfolio-card-content">
                  <h3 class="portfolio-card-title">Roger Perron </h3>
                  <a href="https://www.rogerperron.com/ " class="portfolio-learn-more-btn" target="_blank">Learn More
                    →</a>
                </div>
              </div>
              <div class="portfolio-card">
                <img src="<?php echo $tecknify ?>assets/images/Capture6.png" alt="Project 6" class="portfolio-img" />
                <div class="portfolio-card-content">
                  <h3 class="portfolio-card-title">Brotherly love215</h3>
                  <a href="https://bl215.com/" class="portfolio-learn-more-btn" target="_blank">Learn More
                    →</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- 
        - #FEATURES
      -->

      <section class="section features" id="features" aria-label="features">
        <div class="container">

          <p class="section-subtitle text-center">-Why Choose Us-</p>

          <h2 class="h2 section-title text-center">Reasons to Choose Us</h2>

          <!-- <p class="section-text text-center">
            Get the most of reduction in your team’s operating costs for the
            whole product which creates amazing UI/UX
            experiences.
          </p> -->

          <ul class="grid-list">

            <li>
              <div class="features-card">

                <data class="card-number" value="01">01</data>

                <h3 class="h3 card-title">Proven Track Record </h3>

                <p class="card-text">
                  With over years of experience, we have successfully helped numerous businesses grow their online presence and achieve their marketing goals.
                </p>

              </div>
            </li>

            <li>
              <div class="features-card">

                <data class="card-number" value="02">02</data>

                <h3 class="h3 card-title">Transparent Reporting </h3>

                <p class="card-text">
                  The team at Tecknify is creative yet analytical in its approach to deliver compelling and result-oriented market integrated campaigns.
                </p>

              </div>
            </li>

            <li>
              <div class="features-card">

                <data class="card-number" value="03">03</data>

                <h3 class="h3 card-title">Pocket Friendly Deals </h3>

                <p class="card-text">
                  We provide premium digital marketing services at affordable price to allow our clients to achieve better yields on their investment.
                </p>

              </div>
            </li>

            <li>
              <div class="features-card">

                <data class="card-number" value="04">04</data>

                <h3 class="h3 card-title"> Dedicated Professionals
                </h3>

                <p class="card-text">
                  Our team is passionate about helping businesses succeed, and we take pride in delivering exceptional results that exceed expectations.
                </p>

              </div>
            </li>

            <li>
              <div class="features-card">

                <data class="card-number" value="05">05</data>

                <h3 class="h3 card-title">Goal-Oriented Strategy </h3>

                <p class="card-text">
                  We appreciate the goals and objectives of your business and work towards their achievement through the special, targeted campaigns.
                </p>

              </div>
            </li>

            <li>
              <div class="features-card">

                <data class="card-number" value="06">06</data>

                <h3 class="h3 card-title">Wide Range of Services </h3>

                <p class="card-text">
                  We can help you with all of your digital marketing needs. Starting from paid ads and content creation to SEO and social media marketing.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <section class="technology-stack-section">
        <p class="section-subtitle text-center">-Technology-</p>
        <h2>Which Technology Stack We Used</h2>
        <div class="technology-stack-marquee">
          <div class="technology-stack-track">
            <img src="<?php echo $tecknify ?>assets/images/react.webp" alt="React">
            <img src="<?php echo $tecknify ?>assets/images/nodejs.png" alt="Node.js">
            <img src="<?php echo $tecknify ?>assets/images/javascript.png" alt="JavaScript">
            <img src="<?php echo $tecknify ?>assets/images/mysql.png" alt="MySQL">
            <img src="<?php echo $tecknify ?>assets/images/html.png" alt="HTML">
            <img src="<?php echo $tecknify ?>assets/images/css.png" alt="CSS">
            <!-- Duplicate images for seamless looping -->
            <!-- <img src="/assets/images/php.png" alt="php">
            <img src="https://via.placeholder.com/100x100?text=Node.js" alt="Node.js">
            <img src="https://via.placeholder.com/100x100?text=JavaScript" alt="JavaScript">
            <img src="https://via.placeholder.com/100x100?text=MySQL" alt="MySQL">
            <img src="https://via.placeholder.com/100x100?text=HTML" alt="HTML">
            <img src="https://via.placeholder.com/100x100?text=CSS" alt="CSS"> -->
          </div>
        </div>
      </section>

      <!----------------------- TESTIMONIAL ------------------------>

      <section class="testimonial-section">
        <p class="section-subtitle text-center">-Testimonial-</p>
          <h3 class="testimonial-title">Our Trusted Customers Awesome Reviews</h3>
        <div class="testimonial-carousel">
          <div class="testimonial-container">
            <!-- Testimonial Cards -->
            <div class="testimonial-card">
              <div class="testimonial-header">
                <img src="<?php echo $tecknify ?>assets/images/woman-1.png" alt="Logo" class="testimonial-logo">
                <div>
                  <h3>Lorna Barrow</h3>
                  <p class="testimonial-role">Founder, Impact Training & Development Services, Barbados</p>
                </div>
              </div>
              <p class="testimonial-text">
                “ Working with Tecknify was a great experience for Me!

                I really appreciate your professionalism in approaching and delivering on the job, your quick and helpful responses to my queries and above all your patience with my (too many?) requests for solutions to problems that did not always have to do with Tecknify.

                And all this for a decent and affordable price!
                ”
              </p>
            </div>
            <div class="testimonial-card">
              <div class="testimonial-header">
                <img src="<?php echo $tecknify ?>assets/images/men-1.png" alt="Logo" class="testimonial-logo">
                <div>
                  <h3>Bill Sporcich</h3>
                  <p class="testimonial-role">Owner, Gun Stock Maker,USA</p>
                </div>
              </div>
              <p class="testimonial-text">
                “ Good Communications, timely responce
                I am very happy with the work done for me. The work was well done and fairly priced. ”
              </p>
            </div>
            <div class="testimonial-card">
              <div class="testimonial-header">
                <img src="<?php echo $tecknify ?>assets/images/men-2.png" alt="Logo" class="testimonial-logo">
                <div>
                  <h3>Tom</h3>
                  <p class="testimonial-role">Owner, Nootropic Blend, USA</p>
                </div>
              </div>
              <p class="testimonial-text">
                “ Technify went above and beyond to deliver everything we agreed upon regarding the technical repairs of our website. They answered all our questions and delivered within the agreed timeframe. Their support is friendly, and their service packages are affordable. Highly recommend these guys! ”
              </p>
            </div>
            <!-- Add more cards as needed -->
          </div>
        </div>
      </section>

      <!-- Popup Container -->
      <div id="testimonial-popup" class="popup">
        <div class="popup-content">
          <span class="popup-close">&times;</span>
          <img id="popup-image" src="" alt="Testimonial Image" />
        </div>
      </div>


      <!-- 
        - #FAQ
      -->

      <section class="section faq" aria-label="frequently asked questions">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Discover Frequently Asked
              Questions?</h2>

            <a href="#" class="btn btn-primary">Work Together</a>
          </div>

          <ul class="grid-list">

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    01. What is digital marketing, and how can it benefit my business?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content card-content-faq">
                  <p>
                    Digital marketing is the marketing of products and services through the internet with use of tools such as SEO, social media, e-mail and ads. They make you visible, increase traffic, interact with customers and increase conversions for business development.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    02. How does Tecknify stand out from other digital marketing companies?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content card-content-faq">
                  <p>
                    The services provided by Tecknify include development of specific plans and objectives in line with the client aims and objectives which are developed from analysed data and the best available tools. Innovative thinking our guarantee to produce tangible outcomes or become your go-to digital marketing partner.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    03. Can you help my business rank higher on search engines?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content card-content-faq">
                  <p>
                    Yes, we do search engine optimization in a way we redesign site structure in terms of content and keywords. Organic traffic is also promoted through a variety of targeted strategies that enhance your company’s presence on the online search services.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    04. How do you measure the success of digital marketing campaigns?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content card-content-faq">
                  <p>
                    We track key metrics such as traffic, conversion rates, engagement, and ROI. Using analytics tools, we assess performance and make adjustments, ensuring campaigns deliver measurable results and achieve business goals.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    05. What industries do you specialize in?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content card-content-faq">
                  <p>
                    Tecknify specializes in a variety of industries, including e-commerce, healthcare, finance, real estate, and technology. Our expertise allows us to create effective marketing strategies for diverse business sectors.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

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
            <a href="#contact-us" class="btn-contact">Contact Us</a>
            <a href="#lets-talk" class="btn-talk">Let's Talk</a>
          </div>
        </div>

        <div class="image">
          <img src="<?php echo $tecknify ?>assets/images/about-banner.png" alt="Marketing Expert" />
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
            <img src="<?php echo $tecknify ?>assets/images/tecknify-logo1.png" alt="Hoolix Logo" class="logo-img">
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
            <a href="<?php echo $tecknify ?>service/seo-optimization/" class="footer-link">Search Engine Optimization</a>
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

  <script>
    // Utility function for form submissions
    function submitForm(url, formData, successCallback, errorCallback) {
      fetch(url, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: new URLSearchParams(formData)
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            alert(data.message);
            if (successCallback) successCallback();
          } else {
            alert(data.message);
          }
        })
        .catch(error => {
          console.error('Error:', error);
          if (errorCallback) errorCallback(error);
        });
    }

    // Handle Website Address form submission
    function submitWebsiteAddress() {
      const websiteAddress = document.getElementById('website_address').value;

      if (websiteAddress) {
        submitForm('submit_form.php', {
          website_address: websiteAddress
        }, null, null);
      } else {
        alert("Please enter a website address.");
      }
    }
  </script>

  <script>
    document.getElementById("proposalForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent the default form submission

      // Create a FormData object to gather the form data
      var formData = new FormData(this);

      // Create an XMLHttpRequest object for AJAX
      var xhr = new XMLHttpRequest();

      // Open a POST request to the PHP script that will handle the database insertion
      xhr.open("POST", "submit_form.php", true);

      // Set up a callback function to handle the response from PHP
      xhr.onload = function() {
        if (xhr.status === 200) {
          // If the request is successful, show the response message
          document.getElementById("responseMessage").innerHTML = xhr.responseText;

          // Apply the blinking effect (if needed, as CSS handles it)
          document.getElementById("responseMessage").style.display = "block"; // Make sure it's visible

          // Reset the form fields
          document.getElementById("proposalForm").reset();

          // Close the modal after 5 seconds (5000 milliseconds)
          setTimeout(function() {
            // Hide the modal
            document.getElementById("modal").style.display = "none";
          }, 5000); // 5000ms = 5 seconds
        } else {
          // If an error occurs, show the error message
          document.getElementById("responseMessage").innerHTML = "Error: Unable to submit your request.";
        }
      };

      // Send the form data to the PHP script
      xhr.send(formData);
    });
  </script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.newsletter-form').on('submit', function(e) {
        e.preventDefault(); // Prevent form from submitting normally

        var email = $('.email-field').val();

        $.ajax({
          url: 'submit_form.php', // The PHP file that will handle the form submission
          type: 'POST',
          data: {
            email_address: email
          },
          success: function(response) {
            $('#response-message').html(response); // Display response from PHP
            $('.email-field').val('');
          },
          error: function(xhr, status, error) {
            $('#response-message').html('<p>An error occurred: ' + error + '</p>');
          }
        });
      });
    });
  </script>

</body>

</html>