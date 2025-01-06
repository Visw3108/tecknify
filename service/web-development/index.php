<?php
error_reporting(0);
include "../../config/config.php";

$data = null;
$error = null;

try {
  $id = 5;
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
  <link rel="stylesheet" href="<?php echo $tecknify ?>service/web-development/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cuprum:wght@500;600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="preload" as="image" href="<?php echo $tecknify ?>assets/images/hero-banner.png">
  <?php echo htmlspecialchars_decode(strip_tags($data['seo_head'])); ?>
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
              <li><a href="<?php echo $tecknify ?>service/seo/" class="dropdown-link">Search Engine Optimization</a></li>
              <li><a href="<?php echo $tecknify ?>service/smm/" class="dropdown-link">Social Medial Marketing</a></li>
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

      <section class="digital-marketing">
        <div class="container">
          <h1>Web Development</h1>
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
            <h1>Optimize Your Website for SEO with Professional Web Development Services</h1>
            <p>
              Wishing to have a strong online presence? At Tecknify, we are best in Web Application Development in USA and specialize in crafting high-performance websites that help businesses succeed in the digital world. Our skilled web development team integrates efficient technologies with ergonomically appealing interfaces and on top of that, masterful problem solving. Whether you plan to start a new site or redesigning your existing site, we make certain your online presence resonates with your goals and your audience’s expectation. Having worked in web development industry for several years, we guarantee that we offer smooth, effective and interesting solutions with no customer complaint.
            </p>
            <p>
              At Tecknify, web development transparency fully prevails throughout the development process. The four components all allow you to control the whole process, from the design to the launch. Our objective is to offer the best services available while ensuring that your site is stable, protected and continuously drives the growth of your business. Whether or not you are needing a business consulting firm for full application development, small program development, data management, or technical support, you are welcome to Tecknify IT Solutions, the best Website Development Company in USA.
            </p>
            <!-- <p>
              Our experts at OrangeMantra bring clear transparency as the client is our topmost priority. By maintaining effective communication, we move further to make you appear on the first page of Search engines. As a leading SEO agency, we have been doing it for so long and we can do it for you as well.
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
          <h1>Explore The Range Of Web development Services We Offer</h1>
          <!--  <p>
            As a leading SEO company in India, we bring a complete range of digital marketing services to your business. We ensure that your business site makes it to the first page of Google by using the tried and tested SEO strategies.
          </p> -->
        </div>
        <div class="our-service-grid">
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-website-plan.png" alt="Keywords Research Icon" />
            </div>
            <h2>Planning</h2>
            <p style="text-align: justify;">
              Our planning stage involves establishing the purpose and nature of your website as well as your main reasons for the creation of the website. Based on thorough research, after the goals of the site have been established, we also draw up a detailed layout plan of the site. It also helps us prevent going in circles while on the process of trying to create the website that will best fit what your business needs along with the expectation of the many users it will encounter.
              During the planning phase basic concepts of what the website is to look like, the sitemap and structure as
              well as technologies to be involved are decided on. Starting with detailed research where I pay especial
              attention to website goals and objectives, and key audience to make proper decisions for further work.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-website-design.png" alt="Website Audit Icon" />
            </div>
            <h2>Design</h2>
            <p style="text-align: justify;">
              The design phase is all about shaping the user experience. We create layouts to define appearance, and adhere to the navigation and layout standards. It is our desire that your users are able to find what they want easily on your website without getting bored of your content.
              The main aim of this stage is to create wireframe models and define the style guide and the usability of
              interface design. We must provide users with an easily understandable interface so they wouldn’t have any
              difficulties while interacting with the site and remain interested and happy.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-website-development.png" alt="Traffic Generation Icon" />
            </div>
            <h2>Development</h2>
            <p style="text-align: justify;">
              Here we make your website come alive. By utilizing HTML, CSS, and incorporating modern and cutting-edge technologies, we design a rich, vibrant and a fluid design that is fully responsive to your needs. We also incorporate database and essential technology so that the performance and functionality and as well as the online experience are unique to your business.
              Here we increase fluidity and functionality of layout using HTML and CSS, setting up the basis for an
              interactive website. We also incorporate the databases and the other essential technologies when required
              in order to optimize the performance which will create a unique natural impetus based on your
              requirements.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-website-testing.png" alt="Competitive Analysis Icon" />
            </div>
            <h2>Testing</h2>
            <p style="text-align: justify;">
              We cover all the functional areas of the website to make sure that they operate to the optimal level. This consists of making sure that code and scripts run well across browsers and ensuring that all browsers are compatible all the time. We also evaluate the sites success in regard to business objectives and the users’ perception of value that they derive from the site as we want to make sure all these factors fall squarely in line with your vision.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-website-bug.png" alt="Technical SEO Icon" />
            </div>
            <h2>Debug</h2>
            <p style="text-align: justify;">
              Debugging is the process of finding and fixing errors or bugs in the source code of any software.
              When software does not work as expected, computer programmers study the code to determine why any errors occurred.
              They use debugging tools to run the software in a controlled environment, check the code step by step, and analyze and fix the issue.
            </p>
          </div>
          <!-- <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/keywords_7773200.png" alt="Search Engine Recovery Icon" />
            </div>
            <h2>Search Engine Recovery</h2>
            <p style="text-align: justify;">
              High-quality content powers top search rankings, and we provide end-to-end SEO services to meet your business goals.
            </p>
          </div> -->
        </div>
      </section>


      <!-------------- PORTFOLIO ------------>


      <section class="industries-section">
        <div class="industries-content">
          <h2>Industries We Cater To</h2>
          <p style="text-align: justify;">
            Our team does web design and development for every business type, especially health care, online businesses, education, financial, real estate, hotel and many more. We know that each sector may have its specific requirements and therefore create truly engaging and conversion focused websites for your business.
            We provide web design solutions based on various industry segments such as healthcare, e-commerce,
            education, finance, real estate, hospitality and more to achieve maximum engagement and business impact from
            a user-friendly and responsive website design.
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
          <h1>Other Web development Services We Offer</h1>
          <!-- <p>Here are some other business-driven SEO marketing company services to support your unique business needs</p> -->
        </div>
        <div class="services-grid">
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-api.png" alt="Digital Marketing">
            </div>
            <h3>API Integration and Development </h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-web-application.png" alt="Content Marketing">
            </div>
            <h3>Progressive Web Apps (PWAs) </h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-website-development.png" alt="Email Marketing">
            </div>
            <h3>Custom Portals Development </h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-remote-working.png" alt="ORM Service">
            </div>
            <h3>Cloud-Based Web Development </h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-erp.png" alt="PPC Service">
            </div>
            <h3>Custom CRM and ERP Development </h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-performance.png" alt="ASO">
            </div>
            <h3>Performance Optimization </h3>
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
                    01. Do you provide support after the website is launched?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p style="text-align: justify;">
                    Yes! Website owners can take advantage of a variety of services that we provide including ongoing maintenance services for future periods. The services we offer include bug fixes, content update, performance and security update.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    02. Can you redesign my existing website?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p style="text-align: justify;">
                    Absolutely! Our focus is to design and redesign websites so that their aesthetic aspect, functionality and efficiency improves. We brainstorm with you in the production process until a new style that represents your brand and mission accurately is achieved.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    03. Will my website be mobile-friendly?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p style="text-align: justify;">
                    Yes! Every site that we build is compatible with desktops, tablets, and mobile devices due to the responsiveness we employ.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    04. Do you offer e-commerce website development?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p style="text-align: justify;">
                    Yes, we specialize in designing and developing ecommerce websites that are built for the specific purpose of making sales. We offer clean and slick payment solutions, easy to use products and all the necessary elements for an effective ecommerce site.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    05. Can you integrate third-party tools or APIs into my website?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p style="text-align: justify;">
                    Yes! We can integrate various third-party tools and APIs into your site, including payment gateways, CRM systems, social media feeds, marketing tools, and more, depending on your needs.
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

          <a href="<?php echo $tecknify ?>" class="logo"><img src="<?php echo $tecknify ?>assets/images/tecknify-logo1.png" alt="Tecknify Logo" class="logo-img"></a>

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
            <a href="<?php echo $tecknify ?>service/smm/" class="footer-link">Social Media Optimization</a>
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
              4517 Washington Ave. Manchester, Kentucky 39495
            </address>
          </li>

          <li class="footer-item">
            <ion-icon name="call" aria-hidden="true"></ion-icon>

            <a href="tel:+7894631546876" class="contact-link">+7894631546876</a>
          </li>

          <li class="footer-item">
            <ion-icon name="mail" aria-hidden="true"></ion-icon>

            <a href="mailto:info@hoolix.com" class="contact-link">info@hoolix.com</a>
          </li>

          <li class="footer-item">
            <ul class="social-list">

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-pinterest"></ion-icon>
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
  <script src="<?php echo $tecknify ?>service/web-development/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>