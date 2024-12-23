<?php
error_reporting(0);
include "../../config/config.php";

$data = null;
$error = null;

try {
  $id = 3;
  $stmt = $pdo->prepare("SELECT * FROM services WHERE id = :id");
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();

  // Fetch result
  $data = $stmt->fetch();
  if (!$data) {
    $error = "No service found with the specified ID.";
  }
} catch (PDOException $e) {
  // Handle query error
  $error = "An error occurred: " . $e->getMessage();
}
// print_r($data);exit;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $data ['meta_title'] ?></title>
  <meta name="description" content="<?php echo $data ['meta_desc'] ?>" />
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="<?php echo $tecknify; ?>service/seo/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cuprum:wght@500;600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="preload" as="image" href="<?php echo $tecknify; ?>assets/images/hero-banner.png">
  <!-- <script>
    <?php echo htmlspecialchars_decode(strip_tags($data['seo_head'])); ?>
    </script> -->
    <?php echo htmlspecialchars_decode(strip_tags($data['seo_head'])); ?>
</head>

<body>
<script>
  <?php echo htmlspecialchars_decode($data ['seo_body']) ?>
</script>

  <header class="header" data-header>
    <div class="container">
      <a href="<?php echo $tecknify; ?>" class="logo">
        <img src="<?php echo $tecknify; ?>assets/images/Tecknify-Logo.png" alt="Tecknify Logo 1">
      </a>

      <nav class="navbar" data-navbar>
        <div class="wrapper">
          <a href="<?php echo $tecknify; ?>" class="logo">
            <img src="<?php echo $tecknify; ?>assets/images/tecknify-logo1.png" alt="Tecknify Logo 2">
          </a>
          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">
          <li><a href="<?php echo $tecknify; ?>" class="navbar-link" data-nav-link>Home</a></li>
          <li><a href="<?php echo $tecknify; ?>about/" class="navbar-link" data-nav-link>About</a></li>
          <li class="dropdown">
            <a href="<?php echo $tecknify; ?>service/" class="navbar-link" data-nav-link>Services</a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $tecknify; ?>service/seo/" class="dropdown-link">Search Engine Optimization</a></li>
              <li><a href="<?php echo $tecknify; ?>service/smo/" class="dropdown-link">Social Medial Optimization</a></li>
              <li><a href="<?php echo $tecknify; ?>service/ppc/" class="dropdown-link">PPC Advertising</a></li>
              <li><a href="<?php echo $tecknify; ?>service/web-development/" class="dropdown-link">Web Development</a></li>
              <li><a href="<?php echo $tecknify; ?>service/app-development/" class="dropdown-link">App Development</a></li>
              <li><a href="<?php echo $tecknify; ?>service/content-marketing/" class="dropdown-link">Content Marketing</a></li>
            </ul>
          </li>
          <li><a href="<?php echo $tecknify; ?>portfolio/" class="navbar-link" data-nav-link>Portfolio</a></li>
          <li><a href="<?php echo $tecknify; ?>blog/" class="navbar-link" data-nav-link>Blog</a></li>
          <li><a href="<?php echo $tecknify; ?>contact/" class="navbar-link" data-nav-link>Contact Us</a></li>
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
          <h1>Search Engine Optimization</h1>
          <!-- <p>Grow Your Client Base With Data-Driven and Targeted Strategies</p> -->
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
            <h1>Elevate SEO Marketing Company To Maximize Online Success</h1>
            <p>
              Are you spending a significant amount of time and effort into your content, yet you are not seeing any
              results? Tecknify IT Solutions has significantly enhanced the traffic efficacy of numerous consumers. We
              offer the highest quality SEO services, including off-page SEO, on-page SEO, and local SEO services, to
              enhance your business by conducting forward research on your content and implementing the appropriate
              measures. Our conviction is that there is no substitute for experience, and we are fortunate to have a
              team that has successfully completed numerous projects.
            </p>
            <p>
              Our SEO specialists assist you in achieving the most optimal SEO outcomes to augment the traffic to your
              website. We provide On-Page SEO, Off-Page SEO, Advance SEO, and Local SEO services to assist you in your
              online search. The primary objective is to attract the attention of Google in order to increase traffic
              and reach. This enhances your interaction with your audience in specific ways. Ultimately, we have the
              ability to elevate you to the top of Google's list. You are competing with approximately 200 million
              active sites that have been in the market for an extended period of time.
            </p>
            <p>
              In order to establish yourself in the market, you must now surpass them and walk alongside them. We are
              present to provide you with the necessary methods to accomplish the objectives we have previously
              discussed. We have served various industries with promising SEO results, which is why we are the best SEO
              company. If you wish to reach a specific region or territory, your website should be targeted at that
              location rather than the entire country.
            </p>
          </div>
          <div class="aboutus-image">
            <img src="<?php echo $tecknify; ?>assets/images/seo.jpg" alt="SEO Marketing">
          </div>
        </div>
      </section>

      <!-- 
        - #SERVICE
      -->

      <section class="our-service-section">
        <div class="our-service-header">
          <h1>Explore The Range Of SEO Services We Offer</h1>
          <!--  <p>
            As a leading SEO company in India, we bring a complete range of digital marketing services to your business.
            We ensure that your business site makes it to the first page of Google by using the tried and tested SEO
            strategies.
          </p> -->
        </div>
        <div class="our-service-grid">
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify; ?>assets/images/keywords_7773200.png" alt="Keywords Research Icon" />
            </div>
            <h2>On-Page Optimization </h2>
            <p>
              New algorithms with the search engine appear and disappear. On-page optimisation deals with content on the
              website from the user perspective and enhances click through rate, usability, keyword placement and
              internal linking.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify; ?>assets/images/icons8-keywords-64.png" alt="Website Audit Icon" />
            </div>
            <h2>Off-Page Optimization </h2>
            <p>
              Gaining perfectly targeted and high-quality back links proves to be a major source of traffic to the web
              site. The final step is very important to enhance the performance and ranking of the site.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify; ?>assets/images/icons8-keyword.png" alt="Traffic Generation Icon" />
            </div>
            <h2>Keyword Ideas and Difficulty </h2>
            <p>
              Frequently used keywords that are also very popular are expensive and may require time before showing
              positive ROI.
            </p>
          </div>
          <!-- <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify; ?>assets/images/keywords_7773200.png" alt="Competitive Analysis Icon" />
            </div>
            <h2>Technical SEO </h2>
            <p>
              Technical SEO covers optimizing factors relating to your website; these include, the site speed, the
              crawlability of your pages, URL format, quality of code, and site security.
            </p>
          </div> -->
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify; ?>assets/images/icons8-website-optimization.png" alt="Technical SEO Icon" />
            </div>
            <h2>Technical SEO</h2>
            <p>
              Technical SEO improves crawling, indexing, and fixes issues like duplicate content and page speed for
              better performance.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify; ?>assets/images/icons8-search-engine-optimization.png" alt="Search Engine Recovery Icon" />
            </div>
            <h2>Search Engine Recovery</h2>
            <p>
              High-quality content powers top search rankings, and we provide end-to-end SEO services to meet your
              business goals.
            </p>
          </div>
        </div>
      </section>


      <!-------------- PORTFOLIO ------------>


      <section class="industries-section">
        <div class="industries-content">
          <h2>Industries We Cater To</h2>
          <p style="text-align: justify;">
            Our SEO services include healthcare, e-commerce, finance, education, real estate and technology,
            hospitality, as we are here to help businesses to make the next step in their growth.
          </p>
          <button class="industries-view-all">View All</button>
        </div>
        <div class="industries-carousel-container">
          <div class="industries-carousel">
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="<?php echo $tecknify; ?>assets/images/education.jpg" alt="Education">
              <span class="industries-label">Education</span>
            </div>
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="<?php echo $tecknify; ?>assets/images/finance.jpg" alt="Finance">
              <span class="industries-label">Finance</span>
            </div>
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="<?php echo $tecknify; ?>assets/images/banking.jpg" alt="Banking">
              <span class="industries-label">Banking</span>
            </div>
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="<?php echo $tecknify; ?>assets/images/food.jpg" alt="Food and Retail">
              <span class="industries-label">Food and Retail</span>
            </div>
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="<?php echo $tecknify; ?>assets/images/healthcare.jpg" alt="Healthcare">
              <span class="industries-label">Healthcare</span>
            </div>
            <div class="industries-carousel-item industries-fade-in-up">
              <img src="<?php echo $tecknify; ?>assets/images/technology.jpg" alt="Technology">
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
          <h1>Other SEO Marketing Services We Offer</h1>
          <!-- <p>Here are some other business-driven SEO marketing company services to support your unique business needs
          </p> -->
        </div>
        <div class="services-grid">
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify; ?>assets/images/icons8-voice.png" alt="Digital Marketing">
            </div>
            <h3>Voice SEO</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify; ?>assets/images/icons8-video-seo.png" alt="Content Marketing">
            </div>
            <h3>Video SEO</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify; ?>assets/images/icons8-amazon.png" alt="Email Marketing">
            </div>
            <h3>Amazon SEO </h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify; ?>assets/images/icons8-content-management.png" alt="ORM Service">
            </div>
            <h3>CMS SEO</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify; ?>assets/images/icons8-enterprise.png" alt="PPC Service">
            </div>
            <h3>Enterprise SEO</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify; ?>assets/images/icons8-chatgpt.png" alt="ASO">
            </div>
            <h3>Generative Engine Optimization</h3>
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
                    01. Do I need to update my website for SEO?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Absolutely, updating site’s content frequently to make it useful and relevant, enhancing site’s
                    speed, and making it mobile-friendly is essential not only to sustain high SEO levels, but also to
                    meet the new trends of changing algorithms of search engines.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    02.Can you guarantee my website will rank #1 on Google?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    We can’t promise that you’ll be number one but we have the best SEO solutions to ensure that your
                    website rises to the top gradually. Search engine optimization is a strenuous process, and its
                    outcome influences different aspects including your industry and competition.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    03. Why is SEO important for my business?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    SEO ensures that your business is seen whenever a customer is seeking your product or your service.
                    A good SEO plan and execution results in high visibility, better quality of traffic and hence better
                    sales and brand recognition.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    04. How long does it take to see results from SEO?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    SEO is a long-term technique and the results are likely to manifest within 3 to 6 months. It is
                    worth mentioning that, the speed of outcome depends on competition, website condition, and the
                    efficiency of employed mechanisms.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    05. How do you track SEO performance?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    We track SEO performance using tools like Google Analytics, Google Search Console, and other SEO
                    software to monitor website traffic, keyword rankings, and conversion rates. Regular reports are
                    provided to track progress and adjust strategies.
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
    <script>
      <?php echo htmlspecialchars_decode($data ['seo_foot']) ?>
    </script>
  </footer>

  <!-- 
    - custom js link
  -->
  <script src="<?php echo $tecknify ?>/service/seo/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>