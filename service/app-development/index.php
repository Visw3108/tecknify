<?php
error_reporting(0);
include "../../config/config.php";

$data = null;
$error = null;

try {
  $id = 1;
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
  <link rel="stylesheet" href="<?php echo $tecknify ?>service/app-development/style.css">
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

      <section class="digital-marketing">
        <div class="container">
          <h1>App Development</h1>
          <!--  <p>Grow Your Client Base With Data-Driven and Targeted Strategies</p> -->
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
            <h1>Unlock New Growth Opportunities with Custom App Development Solutions</h1>
            <p>
              Looking to bring your app idea to life? You've come to the right place with Tecknify IT Solutions, the best Mobile App Development Company. Whether you're launching a new app or enhancing an existing one, our top-tier App Development services are here to guide you every step of the way. Perhaps you've already worked with other developers and found the results lacking? The success of app development relies on a combination of the right tools, expertise, and strategic planning. Our skilled team is committed to utilizing cutting-edge technologies and crafting tailor-made solutions that align with your business goals.
            </p>
            <p>
              When you choose to work with us, you are getting much more than an app. You are getting a solution which will help your business to grow. As your strategic partners, our team gets to know you and we deliver your vision through an app that delights your customers and builds your business.
            </p>
            <!-- <p>
              When you choose to work with us, you are getting much more than an app. You are getting a solution which
              will help your business to grow. As your strategic partners, our team gets to know you and we deliver your
              vision through an app that delights your customers and builds your business.
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
          <h1>Explore The Range Of App Development We Offer</h1>
          <!-- <p>
            As a leading SEO company in India, we bring a complete range of digital marketing services to your business.
            We ensure that your business site makes it to the first page of Google by using the tried and tested SEO
            strategies.
          </p> -->
        </div>
        <div class="our-service-grid">
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-android-phone.png" alt="Keywords Research Icon" />
            </div>
            <h2>High-Quality User Experience </h2>
            <p style="text-align: justify;">
              Our primary goal is to keep the user engaging and to make sure your app is intuitive and compelling for the user.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-android-phone-flexible.png" alt="Website Audit Icon" />
            </div>
            <h2>Scalability and Flexibility </h2>
            <p style="text-align: justify;">
              All our apps can be integrated to your business, allowing for ease of expansion of your business to accommodate for growth.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-playstore.png" alt="Traffic Generation Icon" />
            </div>
            <h2>Faster Time-to-Market </h2>
            <p style="text-align: justify;">
              Using our effective development process, we make your app reach markets faster so that it can compete with other apps.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-support.png" alt="Competitive Analysis Icon" />
            </div>
            <h2>Post-Launch Support</h2>
            <p style="text-align: justify;">
              Once your app has been developed, we provide support in terms of maintenance and application of new features to your app to make it relevant.
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
            In Tecknify IT Solutions, we have innovative and strategic services in App Development to address the needs of sectors such as retail, e-commerce, healthcare, legal, financial, education, property, technology and many others. Our developers create and implement appropriately targeted apps with the highest performance characteristics that echo the vision and objectives of your business whilst bringing in increased revenue and facilitating greater customer satisfaction across the board.
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
          <h1>Other App Development Services We Offer</h1>
          <!-- <p>Here are some other business-driven SEO marketing company services to support your unique business needs
          </p> -->
        </div>
        <div class="services-grid">
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-android-os.png" alt="Digital Marketing">
            </div>
            <h3>Native App Development </h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-android-os-cloud.png" alt="Content Marketing">
            </div>
            <h3>Cloud-Based Mobile Apps </h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-event.png" alt="Email Marketing">
            </div>
            <h3>Event Management Apps </h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-shopping.png" alt="ORM Service">
            </div>
            <h3>Reality Shopping Apps </h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-mobile-application.png" alt="PPC Service">
            </div>
            <h3>Testing and User Feedback Integration </h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-bitcoin-market.png" alt="ASO">
            </div>
            <h3>Investment Apps </h3>
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
                    01. What platforms do you develop apps for?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Tecknify focuses specifically on the creation of mobile applications for the iOS and Android platform, as well as a combination of both. If you don’t need a native app, or if you’re looking for a hybrid solution, we have the experience to design the right app for you.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    02. How do you ensure my app is of high quality?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Our development process therefore involves testing phases in order to pin point any problem that may be faced during the initial stages of the product launch. These aspects help us to guarantee that your app is fast, safe, and meets the needs of users.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    03. How long does it take to develop an app?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Concerning the timelines for application development, it cannot be measured in a number of weeks or months because app development depends on your project’s complexity and the application’s scope. In most cases, the total recovery period can range between several weeks to several months. We offer an outlined timeline from the beginning to make sure you know exactly when we will deliver your order.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    04. What happens after the app is launched?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    After making an application, we offer ongoing support and maintenance services. We manage update and maintain fresh appearance with fine performance for the new improving and features that you may get from the feedback of your end users.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    05. What is the difference between native and hybrid apps?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    It is an app designed directly for a given operating system (iOS or Android) and performs well while providing access to device functions. A hybrid app can be best described as an app that is developed once and may be deployed on more than one platform. The right choice depends whether on the complexity of your project or how deep your pockets are.
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
    <script>
      <?php echo htmlspecialchars_decode($data['seo_foot']) ?>
    </script>
  </footer>

  <!-- 
    - custom js link
  -->
  <script src="<?php echo $tecknify ?>service/app-development/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>