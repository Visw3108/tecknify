<?php
error_reporting(0);
include "../../config/config.php";
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
  <link rel="stylesheet" href="<?php echo $tecknify ?>service/content-marketing/style.css">

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
              <li><a href="<?php echo $tecknify ?>service/seo-optimization/" class="dropdown-link">SEO Optimization</a></li>
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

      <!-- 
        - #ABOUT
      -->

      <section class="aboutus-section">
        <div class="aboutus-container">
          <div class="aboutus-content">
            <h1>Achieve Long-Term Growth with Innovative, Custom Content Marketing Solutions</h1>
            <p>
              In need of captivating content to skyrocket product orders? Using Tecknify, you can accomplish your goals. Not only does content define your website and draw in visitors, but it also showcases your merchandise on many internet channels. If the material is excellent, it will provide the reader with all the information they need. Optimal content marketing services include providing relevant information with advertisements and descriptive text.
            </p>
            <p>
              When it comes to content marketing, Tecknify being the best content marketing company in USA is way above the competition. With the goal of boosting sales and attracting a loyal following, we strive to provide top-notch material for our clients' products. Tecknify is a leading content marketing agency because we help you attract loyal customers who will be there for your brand for the long haul. Countless multinational corporations and Indian customers have reaped the benefits of Tecknify's hard-working and knowledgeable staff. In order to make the customer believe in your product and stay engaged with your business for a long time, we supply it with high-quality content.
            </p>
            <!-- <p>
              Our experts at OrangeMantra bring clear transparency as the client is our topmost priority. By maintaining
              effective communication, we move further to make you appear on the first page of Search engines. As a
              leading SEO agency, we have been doing it for so long and we can do it for you as well.
            </p> -->
          </div>
          <div class="aboutus-image">
            <img src="<?php echo $tecknify ?>assets/images/seo.jpg" alt="SEO Marketing">
          </div>
        </div>
      </section>

      <!-- 
        - #SERVICE
      -->

      <section class="our-service-section">
        <div class="our-service-header">
          <h1>Explore The Range Of Content Marketing Services We Offer</h1>
          <!-- <p>
            As a leading SEO company in India, we bring a complete range of digital marketing services to your business.
            We ensure that your business site makes it to the first page of Google by using the tried and tested SEO
            strategies.
          </p> -->
        </div>
        <div class="our-service-grid">
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-news-paper.png" alt="Keywords Research Icon" />
            </div>
            <h2>Content Attracts Reader</h2>
            <p style="text-align: justify;">
              Consumers will be more receptive to learning about your company's name, offerings, and products if the material is of high quality and relevant to their needs.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-link.png" alt="Website Audit Icon" />
            </div>
            <h2>Building good backlinks</h2>
            <p style="text-align: justify;">
              Google gives more weight to websites with high-quality content, so if you don't have any, it will be difficult to attract quality backlinks and boost your search engine rankings.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-google-news.png" alt="Traffic Generation Icon" />
            </div>
            <h2>Social validation obtained</h2>
            <p style="text-align: justify;">
              When your content is informative and people connect with it on social media, sharing links and comments, Google perceives this as a sign of quality and improves your link optimisation.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-rank.png" alt="Competitive Analysis Icon" />
            </div>
            <h2>Helps in Ranking a website</h2>
            <p style="text-align: justify;">
              Google assigns more weight to high-quality, original, and plagiarized-free material.
            </p>
          </div>
          <!-- <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/keywords_7773200.png" alt="Technical SEO Icon" />
            </div>
            <h2>Technical SEO</h2>
            <p>
              Technical SEO improves crawling, indexing, and fixes issues like duplicate content and page speed for
              better performance.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/keywords_7773200.png" alt="Search Engine Recovery Icon" />
            </div>
            <h2>Search Engine Recovery</h2>
            <p>
              High-quality content powers top search rankings, and we provide end-to-end SEO services to meet your
              business goals.
            </p>
          </div> -->
        </div>
      </section>


      <!-------------- PORTFOLIO ------------>


      <section class="industries-section">
        <div class="industries-content">
          <h2>Industries We Cater To</h2>
          <p style="text-align: justify;">
            rangeMantra as a SEO Optimization agency offers customized SEO
            solutions to uplift your brand engagement and visibility across the
            industrial verticals among the wider audience.
          </p>
          <button class="industries-view-all">View All</button>
        </div>
        <div class="industries-carousel-container">
          <div class="industries-carousel">
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="<?php echo $tecknify ?>assets/images/education.jpg" alt="Education">
              <span class="industries-label">Education</span>
            </div>
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="<?php echo $tecknify ?>assets/images/finance.jpg" alt="Finance">
              <span class="industries-label">Finance</span>
            </div>
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="<?php echo $tecknify ?>assets/images/banking.jpg" alt="Banking">
              <span class="industries-label">Banking</span>
            </div>
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="<?php echo $tecknify ?>assets/images/food.jpg" alt="Food and Retail">
              <span class="industries-label">Food and Retail</span>
            </div>
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="<?php echo $tecknify ?>assets/images/healthcare.jpg" alt="Healthcare">
              <span class="industries-label">Healthcare</span>
            </div>
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="<?php echo $tecknify ?>assets/images/technology.jpg" alt="Technology">
              <span class="industries-label">Technology</span>
            </div>
          </div>
        </div>
      </section>

      <!-- 
        - #FEATURES
      -->

      <section class="services-section">
        <div class="services-header">
          <h1>Other Content Marketing Services We Offer</h1>
          <!-- <p>Here are some other business-driven SEO marketing company services to support your unique business needs
          </p> -->
        </div>
        <div class="services-grid">
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-blog.png" alt="Digital Marketing">
            </div>
            <h3>Blog Posts</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-article.png" alt="Content Marketing">
            </div>
            <h3>Article Writing</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-writing-down.png" alt="Email Marketing">
            </div>
            <h3>Academic Writing</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-right-handed.png" alt="ORM Service">
            </div>
            <h3>SEO Writing</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-writing.png" alt="PPC Service">
            </div>
            <h3>Technical Writing</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-online-user.png" alt="ASO">
            </div>
            <h3>Social Media Content</h3>
          </div>
        </div>
      </section>

      <!-- 
        - #FAQ
      -->

      <section class="section faq" aria-label="frequently asked questions">
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
                    01. How can content marketing help my business?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Advantages of content marketing to your business include increased brand awareness, website traffic, customer interaction, and industry authoritative status. Initially, it is used to grow your leads and develop a strong and healthy relationship with your audience hence improving on the conversion rates as well as the sales.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    02. What types of content do you create?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    At Tecknify IT Solutions, we write blogs, articles, social media content, whitepapers, e-books, case studies, videos, infographics, email marketing content among others. Each article is produced in a way that will appeal to your audience and is designed to achieve specific business goals.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    03. How do you determine what content is best for my business?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    The first steps are the analysis of the initial elements of the project: your brand, your audience and your objectives. We research for your audiences, what they like, what they dislike, and what they are looking for. Based on this data, we have a content strategy that meets that need and bring that kind of engagement.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    04. Do you offer SEO services with content marketing?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Yes! For all our content marketing campaigns, we ensure that we uphold SEO principles. This entails carrying out keyword research to find the Keywords to use in their website, optimizing website elements such as title tags and Meta tags, link building and developing Unique and quality content that is optimized to ensure it appears on the first page of search engines to attract more traffic to the website.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    05. How do you measure the success of content marketing campaigns?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    We monitor the more frequently used metrics like website visits, likes, shares, comments, leads, conversion rates, as well as the ranking by search engines. The content marketing services from our team include the preparation of detailed reports so that you can better appreciate your campaigns’ outcome and guide your decisions.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

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
  <script src="<?php echo $tecknify ?>service/content-marketing/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>