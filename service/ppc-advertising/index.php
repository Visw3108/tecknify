<?php
error_reporting(0);
include "../../config/config.php";
// print_r($tecknify);exit;

$data = null;
$error = null;

try {
  $id = 2;
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
  <title><?php echo $data['meta_title'] ?></title>
  <meta name="description" content="<?php echo $data['meta_desc'] ?>" />
  <link rel="shortcut icon" href="<?php echo $tecknify ?>favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="<?php echo $tecknify ?>service/ppc-advertising/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cuprum:wght@500;600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="preload" as="image" href="<?php echo $tecknify ?>assets/images/hero-banner.png">
  <script>
    <?php echo htmlspecialchars_decode($data['seo_head']) ?>
  </script>
</head>

<body>
  <script>
    <?php echo htmlspecialchars_decode($data['seo_body']) ?>
  </script>

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
          <h1>Pay Per Click</h1>
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
            <h1>Accelerate Business Growth with Data-Driven PPC Advertising Solutions</h1>
            <p>
              Looking to maximize your PPC services? You've found the perfect solution with our top-notch PPC management services in USA. Perhaps you've previously utilized the services and found the outcomes didn't meet your expectations. The reality is that the effectiveness of a PPC service hinges on specific factors. Our dedicated team has committed their time and expertise to mastering algorithms and executing strategic plans. Our focus is on delivering outstanding results while keeping costs low, utilizing the right keywords and other strategies to boost your traffic effectively.
            </p>
            <p>
              With a track record of 100% success and glowing client reviews, we stand out as the most trusted Pay per click management company. We believe in kicking off our service with tangible results. Experience immediate enhancements, all while enjoying a fully transparent process with the client. When you arrive with the right service and your goal in mind, there's no need to stress about anything else. Our team expertly handles every aspect, from crafting compelling content to optimizing keywords and reaching the ideal audience. Experience the transformation as you partner with the leading PPC Service, watching your results come to life.
            </p>
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
          <h1>Explore The Range Of PPC Services We Offer</h1>

        </div>
        <div class="our-service-grid">
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-google.png" alt="Keywords Research Icon" />
            </div>
            <h2>Not dependent on Google algorithms</h2>
            <p style="text-align: justify;">
              Your website promotion does not require any form of Google’s algorithm. Indeed, the success of the business largely depends with the amount of money that is spent on advertising.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-customer.png" alt="Website Audit Icon" />
            </div>
            <h2>Enhances customer attribution</h2>
            <p style="text-align: justify;">
              It assists in the frequency of the number of times the customers will take to see the Ad. When the number of times the customers will land your page, assist in building up the leads.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-brand.png" alt="Traffic Generation Icon" />
            </div>
            <h2>Brand recognition</h2>
            <p style="text-align: justify;">
              Brand awareness is important since the visitor may not always be ready to make a purchase, but in case he or she has an understanding about the brand they can opt to use the service at some point in the future.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-sales.png" alt="Competitive Analysis Icon" />
            </div>
            <h2>Increase sales, revenue, and leads</h2>
            <p style="text-align: justify;">
              PPC ads focused on targeted customers. Your leads will make the sales as well as the revenue will boost as long as the company provides quality products or services to the customers.
            </p>
          </div>
      </section>


      <section class="industries-section">
        <div class="industries-content">
          <h2>Industries We Cater To</h2>
          <p style="text-align: justify;">
            At Tecknify IT Solutions, we offer a wide service line of PPC advertising management services suitable for almost any type of business, for instance, retail, e-commerce, healthcare, legal services, financial services, education, real estate, technology, and many more. We ensure that our clients are able to target their right audience, gain higher returns on investment and increase sales through paid advertising.
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
          <h1>Other PPC Services We Offer</h1>
          <!-- <p>Here are some other business-driven SEO marketing company services to support your unique business needs
          </p -->
        </div>
        <div class="services-grid">
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-advertise.png" alt="Digital Marketing">
            </div>
            <h3>Bing Ads Management </h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-amazon.png" alt="Content Marketing">
            </div>
            <h3>Amazon PPC Ads </h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-website-audit.png" alt="Email Marketing">
            </div>
            <h3>PPC Audit Services </h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-google-admob.png" alt="ORM Service">
            </div>
            <h3>Google Shopping Ads </h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-web.png" alt="PPC Service">
            </div>
            <h3>Social Media Ads </h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-advertising.png" alt="ASO">
            </div>
            <h3>In-stream Ads</h3>
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
                    01. What platforms do you manage PPC campaigns on?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p style="text-align: justify;">
                    Tecknify deal majorly with PPC campaigns on Google Ads, Bing Ads, Facebook Ads, LinkedIn Ads, and Instagram Ads. Next, we select the most appropriate platform for your business depending on the kind of business you are dealing with, the target market and marketing objectives you have set.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    02. How do you optimize PPC campaigns for better results?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p style="text-align: justify;">
                    The concept of PPC optimization in our case refers to ongoing work with keywords, headline and ad text split testing, bid management, landing page optimization, and reporting on analytics insight. We also keep track of your campaign’s responses in real-time with a view of making modifications which enhance your ROI.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    03. How quickly can I expect results from my PPC campaign?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p style="text-align: justify;">
                    A PPC campaign when launched can be full of traffic and results in a short span of time. However, to get the desired results, we constantly analyses and fine tune the campaigns so as to get ongoing enhancements of the campaigns. In most cases, you should be able to achieve some sort of result within the first two to four weeks depending on your niche and objective.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    04. Can you help with both local and international PPC campaigns?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p style="text-align: justify;">
                    Yes! Tecknify has prior knowledge of conducting localized as well as international PPC ad campaigns. According to your requirements, we can assist you in advertising your company locally or venturing globally.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    05. What is the difference between PPC and SEO?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p style="text-align: justify;">
                    While PPC and SEO are both important tools in the online marketing strategy, these two are used differently. Whereas SEO provides organic visibility that optimizes over time, PPC avails visibility within short time through ads. Tecknify employs a mix of both with the aim of leading you to the best of your web presence and directing traffic to your web business.
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
            <img src="<?php echo $tecknify ?>assets/images/tecknify-logo1.png" alt="Tecknify Logo" class="logo-img">
          </a>

          <p class="footer-text">
            We specialise in personalised digital marketing tactics that boost growth and online visibility at Tecknify IT Solutions. Our commitment to quality assures commercial success.
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
          &copy; 2022 | All Rights Reserved by <a href="<?php echo $tecknify ?>" class="copyright-link">Tecknify</a>
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="<?php echo $tecknify ?>" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="<?php echo $tecknify ?>" class="footer-bottom-link">Terms of Use</a>
          </li>

          <li>
            <a href="<?php echo $tecknify ?>" class="footer-bottom-link">Site Map</a>
          </li>

        </ul>

      </div>
    </div>
    <script>
      <?php echo htmlspecialchars_decode($data['seo_foot']) ?>
    </script>
  </footer>

  <!-- 
    - custom js link
  -->
  <script src="<?php echo $tecknify ?>service/ppc-advertising/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>