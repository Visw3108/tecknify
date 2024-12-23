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
  <link rel="stylesheet" href="<?php echo $tecknify ?>about/style.css">
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
          <li><a href="/about/" class="navbar-link" data-nav-link>About</a></li>
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

      <div class="who-we-are-container">
        <div class="who-we-are-image-section fade-in-up">
          <img src="<?php echo $tecknify ?>assets/images/who-we-wre.jpg" alt="Teamwork Image">
        </div>
        <div class="who-we-are-content-section fade-in-up">
          <h3 class="who-we-are-tagline">_Who We Are_</h3>
          <h1>Reputation Monitoring and Management.</h1>
          <p class="para-text">
            Tecknify is one of the best marketing agencies providing the best SEO services at relatively low prices. Our
            process starts with the web design and then we write unique, professional-content that is relevant to your
            niche. After designing your company’s website, we then ensure that the website will rank very well on Google
            results through the use of SEO consultants.
          </p>
          <p class="para-text">
            Besides SEO our company improves your presence on the web with help of Social Media Marketing & Advertising
            on Facebook and Twitter or promotes your brand on some other channels. We also offer many other services
            such as PPC online advertising, graphic design services, content writing services, E-mail marketing, mobile
            marketing, and YouTube marketing services.
          </p>
          <p class="para-text">
            We enhance your online presence, improve the sales rates, and increase the profits of your business
            organization. Having worked in the industry for years we are one of the leading best digital marketing
            agencies always in the quest to be the very best. Its main goal is to achieve long term cooperation with
            clients while providing and maintaining the highest standard of our services. Decision at this point is good
            since we never compromise on quality and we are focused to provide quality services to our clients.
          </p>
          <!-- <div class="who-we-are-features">
            <div class="who-we-are-feature">
              <span class="who-we-are-icon">🎧</span>
              <h4>Improved Reputation</h4>
              <p>Eliminate harmful reviews to maintain a positive brand image.</p>
            </div>
            <div class="who-we-are-feature">
              <span class="who-we-are-icon">🎧</span>
              <h4>Increased Credibility</h4>
              <p>Boost your credibility by removing false or unfair feedback.</p>
            </div> -->
        </div>
      </div>
      </div>

      <section class="team-section">
        <div class="team-content">
          <h3 class="our-team-tagline">_Our Team_</h3>
          <h1>Our team has the experience and drive to help you success.</h1>
          <p class="para-text">At Tecknify IT Solutions, our team is the driving force behind our success. Comprised of passionate and
            skilled professionals, we bring together expertise in digital marketing, technology, and innovation to
            deliver outstanding results for our clients. From strategic marketers and creative designers to data-driven
            analysts and experienced developers, each member plays a vital role in ensuring that our solutions are not
            only effective but also tailored to meet the unique needs of every business. With a collaborative approach
            and a commitment to excellence, the Tecknify team is dedicated to transforming your digital presence and
            helping your business thrive in the ever-evolving online landscape.</p>
          <p class="para-text">Our people are our capital and, at Tecknify IT Solutions, our team is the cornerstone of our success. We
            are a team of dedicated and experienced specialists who focused on Digital Marketing, Technology and
            Innovation to produce best outcome for our clients. Our goal-oriented strategists, innovative designers,
            rigorous data scientists and skilled developers create and support solutions that are not only functional
            but also reflect the personality and development requirements of every client. The Tecknify team aims for
            excellence in a teamwork is here to make your online appearance superb and help your company succeed in the
            constantly changing Internet world.</p>
          <a href="#" class="button">Meet Our Team</a>
        </div>
        <div class="image">
          <img src="<?php echo $tecknify ?>assets/images/our-team.png" alt="Team meeting">
        </div>
      </section>

      <!-------------- PORTFOLIO ------------>

      <section class="client-logos">
        <h2>Our Clients</h2>
        <div class="marquee-container">
          <div class="logos-container">
            <img src="<?php echo $tecknify ?>assets/images/all-clients/logo1.png" alt="Farmart">
            <img src="<?php echo $tecknify ?>assets/images/all-clients/logo10.png" alt="The Firm Soar">
            <img src="<?php echo $tecknify ?>assets/images/all-clients/logo11.png" alt="House of Fixes">
            <img src="<?php echo $tecknify ?>assets/images/all-clients/logo12.png" alt="Just On">
            <img src="<?php echo $tecknify ?>assets/images/all-clients/logo13.png" alt="Ross Toys">
            <img src="<?php echo $tecknify ?>assets/images/all-clients/logo14.png" alt="Verify Ads">
            <img src="<?php echo $tecknify ?>assets/images/all-clients/logo2.png" alt="Verify Ads">
            <img src="<?php echo $tecknify ?>assets/images/all-clients/logo3.png" alt="Verify Ads">
            <img src="<?php echo $tecknify ?>assets/images/all-clients/logo4.png" alt="Verify Ads">
            <img src="<?php echo $tecknify ?>assets/images/all-clients/logo5.png" alt="Verify Ads">
            <img src="<?php echo $tecknify ?>assets/images/all-clients/logo6.png" alt="Verify Ads">
            <img src="<?php echo $tecknify ?>assets/images/all-clients/logo7.png" alt="Verify Ads">
            <img src="<?php echo $tecknify ?>assets/images/all-clients/logo8.png" alt="Verify Ads">
            <img src="<?php echo $tecknify ?>assets/images/all-clients/logo9.png" alt="Verify Ads">
            <!-- Add more logos if needed -->
          </div>
        </div>
      </section>


      <div class="office-map">
        <div class="office-map-content">
          <h1>Connecting Businesses Globally with Expert Digital Marketing Services</h1>
          <p class="para-text">We have researched digital marketing throughout the world hence we are proud to give our clients the best
            IT talent regardless the location. If you are looking for an SEO specialist in Sydney or a social media
            manager in New York, we ensure you are brought to the right people who will result in high returns for your
            organization. Our international presence guarantees that you identify a suitable company to work with
            because all of them can help take your brand far in the virtual space.</p>
        </div>
        <div class="office-map-video">
          <video autoplay muted loop>
            <source src="<?php echo $tecknify ?>assets/map.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>

      <!-- 
        - #FEATURES
      -->
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
            <a href="tel:+917682064973" class="btn-talk">Let's Talk</a>
          </div>
        </div>

        <div class="image">
          <img src="<?php echo $tecknify ?>assets/images/about-banner.png" alt="Marketing Expert" />
        </div>
      </div>

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
            Lorem ipsum dolor sit amet consecte tur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
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
  <script src="<?php echo $tecknify ?>about/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>