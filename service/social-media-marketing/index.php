<?php
error_reporting(0);
include "../../config/config.php";

$data = null;
$error = null;

try {
  $id = 4;
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
  <link rel="stylesheet" href="<?php echo $tecknify ?>service/social-media-marketing/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cuprum:wght@500;600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="preload" as="image" href="<?php echo $tecknify ?>assets/images/hero-banner.png">

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
          <h1>Social Medial Marketing</h1>
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
            <h1>Elevate SMM Marketing Company To Maximize Online Success</h1>
            <p>
              Want to go viral on social media and turn engagement into real customers? That's exactly what we do at Tecknify.com. We specialize in providing Social Media Marketing in USA that generates strong responses to your ads, helping you reach a wider audience. Our team is dedicated to each service we offer, ensuring your business grows through social media. Most people are active online, especially on social platforms, making them the perfect place to showcase your products. When someone sees what you offer, they’re more likely to buy.
            </p>
            <p>
              The best social media marketing services are provided by us, and they are designed to assist your company in expanding the reach of your social media postings and attracting a larger audience to your website. On the other hand, we do not believe in providing service just once. Rather, we believe in creating a committed audience that will remain loyal to you for an extended period of time and will also become your trusted clients. What sets us apart from other companies in the market is this particular aspect.
            </p>
          </div>
          <div class="aboutus-image">
            <img src="<?php echo $tecknify ?>assets/images/seo.jpg" alt="SMO Marketing">
          </div>
        </div>
      </section>

      <!-- 
        - #SERVICE
      -->

      <section class="our-service-section">
        <div class="our-service-header">
          <h1>Explore The Range Of SMM Services We Offer</h1>
          <!--  <p>
            As a leading SEO company in India, we bring a complete range of digital marketing services to your business.
            We ensure that your business site makes it to the first page of Google by using the tried and tested SEO
            strategies.
          </p> -->
        </div>
        <div class="our-service-grid">
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/keywords_7773200.png" alt="Keywords Research Icon" />
            </div>
            <h2>Business Marketing </h2>
            <p style="text-align: justify;">
              One of the biggest benefits that come with working with Tecknify IT Solutions is that this comes with a lot of know-how involved in handling the brand’s reputation on the social media platforms. We are experts in the creation and management of the brand image across each of the social networks, ensuring that the messages are aimed at the largest audience possible in the shortest amount of time in order to create buzz.
              One of the biggest benefits that come with working with Tecknify IT Solutions is that this comes with a
              lot of know-how involved in handling the brand’s reputation on the social media platforms. We are experts
              in the creation and management of the brand image across each of the social networks, ensuring that the
              messages are aimed at the largest audience possible in the shortest amount of time in order to create
              buzz.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-website-audit.png" alt="Website Audit Icon" />
            </div>
            <h2>Building Brand Recognition </h2>
            <p style="text-align: justify;">
              Tecknify never sleeps when it comes to making your brand famous across the different social media platforms. We make sure it is not only seen, but it is also spoken about by the audience. We take advantage of the expertise in combination with equipment to ensure that your brand finds a befitting place in front of the most significant audience base thus creating awareness.
              Tecknify never sleep when it comes to making your brand famous across the different social media
              platforms. We make sure it is not only seen, but it is also spoken about by the audience. We take
              advantage of the expertise in combination with equipment to ensure that your brand finds a befitting place
              in front of the most significant audience base thus creating awareness.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-website-traffic.png" alt="Traffic Generation Icon" />
            </div>
            <h2>Projecting Brand Values</h2>
            <p style="text-align: justify;">
              We are also good at storytelling, the kind of story that you want to tell the world about your brand. Concern appeal, self-interest, and product appeal, all contribute to defining and branding your business in a way to the needs and wants of the consumer.
              We are also good at storytelling, the kind of story that you want to tell the world about your brand.
              Concern appeal, self-interest, and product appeal, all contribute to defining and branding your business
              in a way to the needs and wants of the consumer.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-website.png" alt="Competitive Analysis Icon" />
            </div>
            <h2>Brand Promotion </h2>
            <p style="text-align: justify;">
              Social media marketing is considered to be one of the most successful approaches in advertising your brand across a variety of media channels such as Facebook, Twitter and YouTube among others. But it does not end there, your brand can also do well at visually centric networks like Pinterest, Flickr, and Instagram, all fine-tuned for getting the most for your brand.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-social-media-marketing.png" alt="Competitive Analysis Icon" />
            </div>
            <h2> Industries We Cater To </h2>
            <p style="text-align: justify;">
              Our Social Media Marketing services are highly relevant to industries such as retail, hospitality, healthcare, finance, real estate, technology and many others to reach consumers, foster communities and gain growth in social media channels.
            </p>
          </div>
          <!-- <div class="our-service-card">
            <div class="our-service-icon">
              <img src="icons/technical-seo-icon.svg" alt="Technical SEO Icon" />
            </div>
            <h2>Technical SEO</h2>
            <p style="text-align: justify;">
              Technical SEO improves crawling, indexing, and fixes issues like duplicate content and page speed for
              better performance.
            </p>
          </div>
          <div class="our-service-card">
            <div class="our-service-icon">
              <img src="icons/recovery-icon.svg" alt="Search Engine Recovery Icon" />
            </div>
            <h2>Search Engine Recovery</h2>
            <p style="text-align: justify;">
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
            Our Social Media Marketing services are highly relevant to industries such as retail, hospitality,
            healthcare, finance, real estate, technology and many others to reach consumers, foster communities and gain
            growth in social media channels.
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
          <h1>Other SEO Marketing Services We Offer</h1>
          <!-- <p>Here are some other business-driven SEO marketing company services to support your unique business needs
          </p> -->
        </div>
        <div class="services-grid">
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/marketing_15245336.png" alt="Digital Marketing">
            </div>
            <h3>Localized Social Media Marketing</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-social-media-marketing.png" alt="Content Marketing">
            </div>
            <h3>Influencer Marketing</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-content-marketing.png" alt="Email Marketing">
            </div>
            <h3>Interactive Content Creation</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-video.png" alt="ORM Service">
            </div>
            <h3>Video and Live Streaming Optimization</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-social-media-intigration.png" alt="PPC Service">
            </div>
            <h3>Social Media Integration with SEO</h3>
          </div>
          <div class="service-card fade-in-up">
            <div class="service-icon">
              <img src="<?php echo $tecknify ?>assets/images/icons8-customer-feedback.png" alt="ASO">
            </div>
            <h3>Customer Feedback Management</h3>
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
                    01. Why should I invest in SMM for my business?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    A verified and active SMM can assist brands create brand awareness, cultivate customer relationships and channel targeted traffic to one’s site. It is a successful method to reach a vast, wider audience with even better intents and purposes in developing your company.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    02. How long does it take to see results from SMM?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    No specific timeline is given as the matter depends on the objective of the project, type of business, and market challenges. Usually, the first positive results the website’s owner can observe work within 3 to 6 months providing a consistent activity.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    03. Which social media platforms should my business use?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    The platforms which are best for your business depend with the type/segment of the market you are in. We assist in identifying relevant platforms if you’re unclear as to which would be appropriate; for example, is it Instagram, Facebook, LinkedIn, Twitter, or others depending on the strategy and company type.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    04. How do you measure success in SMM?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    The Key Performance Indicators (KPI) includes engagement rates and web traffic, conversion and follower growth among the target audience. We make it our responsibility to give accounts of the progress, or the results which can help in tweaking efforts for better outcome.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    05. Can you help create content for my social media channels?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Yes, we offer content creation services where you can request posts, graphics, videos and much more. While working with our team, all the content will maintain your brand’s voice and meet its objectives and appeal to your target audience.
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
          &copy; 2022 | All Rights Reserved by <a href="<?php echo $tecknify ?>" class="copyright-link">Tecknify</a>
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
  <script src="<?php echo $tecknify ?>service/social-media-marketing/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>