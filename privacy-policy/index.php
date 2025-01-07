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
  <link rel="stylesheet" href="<?php echo $tecknify ?>privacy-policy/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cuprum:wght@500;600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="preload" as="image" href="<?php echo $tecknify ?>assets/images/hero-banner.png">
</head>

<body>

<!-- Header -->

  <header class="header" data-header>
    <div class="container">
      <a href="<?php echo $tecknify ?>" class="logo">
        <img src="<?php echo $tecknify ?>assets/images/Tecknify-Logo.png" alt="Tecknify Logo">
      </a>
  
      <nav class="navbar" data-navbar>
        <div class="wrapper">
          <a href="<?php echo $tecknify ?>" class="logo">
            <img src="<?php echo $tecknify ?>assets/images/Tecknify-Logo.png" alt="Tecknify Logo">
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
              <li><a href="<?php echo $tecknify ?>service/seo-optimization/" class="dropdown-link">Social Medial Marketing</a></li>
              <li><a href="<?php echo $tecknify ?>service/social-media-marketing/" class="dropdown-link">Social Medial Marketing</a></li>
              <li><a href="<?php echo $tecknify ?>service/ppc-advertising/" class="dropdown-link">PPC Advertising</a></li>
              <li><a href="<?php echo $tecknify ?>service/web-development/" class="dropdown-link">Web Development</a></li>
              <li><a href="<?php echo $tecknify ?>service/app-development/" class="dropdown-link">App Development</a></li>
              <li><a href="<?php echo $tecknify ?>service/content-marketing/" class="dropdown-link">Content Marketing</a></li>
            </ul>
          </li>
          <li><a href="<?php echo $tecknify ?>portfolio" class="navbar-link" data-nav-link>Portfolio</a></li>
          <li><a href="<?php echo $tecknify ?>blog" class="navbar-link" data-nav-link>Blog</a></li>
          <li><a href="<?php echo $tecknify ?>contact/" class="navbar-link" data-nav-link>Contact Us</a></li>
        </ul>
      </nav>
  
      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>
  
      <a href="#" class="btn-outline">Let's talk</a>
      <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
  </header>

  <main>
    <article>

      <div class="privacy-policy-heading">
        <h1>Privacy Policy</h1>
    </div>

    <section class="privacy-policy-section">
        <p class="privacy-policy-intro">
            At Just On Events, we take your privacy seriously. This Privacy Policy outlines how we collect, use, protect, 
            and disclose your personal information when you use our services. By accessing or using our services, 
            you agree to the practices described in this policy.
        </p>

        <h2 class="privacy-policy-title">1. Information We Collect</h2>
        <p class="privacy-policy-text">We collect personal information when you interact with us in various ways, including but not limited to:</p>
        <ul class="privacy-policy-list">
            <li class="privacy-policy-list-item"><strong>Personal Identifiable Information (PII):</strong> When you enter personal details into any of our forms, 
                we may obtain your name, e-mail address, telephone number, mailing address, and payment details.</li>
            <li class="privacy-policy-list-item"><strong>Event Details:</strong> Details about the events you attend, your interests, preferences, requests, 
                and needs such as food intolerances or physical disabilities.</li>
        </ul>

        <h2 class="privacy-policy-title">2. How We Use Your Information</h2>
        <p class="privacy-policy-text">We use the information we collect for various purposes, including:</p>
        <ul class="privacy-policy-list">
            <li class="privacy-policy-list-item"><strong>Event Registration and Communication:</strong> To register and organize events, update clients about events, and offer support.</li>
            <li class="privacy-policy-list-item"><strong>Marketing and Promotions:</strong> To send promotional materials, newsletters, and information about forthcoming events. You may unsubscribe at any time.</li>
            <li class="privacy-policy-list-item"><strong>Improving Our Services:</strong> To analyze and improve our website and services for a better user experience.</li>
            <li class="privacy-policy-list-item"><strong>Legal and Regulatory Compliance:</strong> To meet legal requirements and enforce our terms and conditions.</li>
        </ul>

        <h2 class="privacy-policy-title">3. How We Protect Your Information</h2>
        <p class="privacy-policy-text">We use reasonable procedures to protect the privacy of your personal data through:</p>
        <ul class="privacy-policy-list">
            <li class="privacy-policy-list-item">Encryption technologies (e.g., SSL) to protect sensitive data.</li>
            <li class="privacy-policy-list-item">Restricted access to personal information within our organization.</li>
            <li class="privacy-policy-list-item">Regular monitoring of systems to identify potential vulnerabilities.</li>
        </ul>

        <h2 class="privacy-policy-title">4. Sharing Your Information</h2>
        <p class="privacy-policy-text">We may share your information with:</p>
        <ul class="privacy-policy-list">
            <li class="privacy-policy-list-item"><strong>Third-Party Service Providers:</strong> For event management, payment processing, and marketing purposes. These providers comply with this Privacy Policy.</li>
            <li class="privacy-policy-list-item"><strong>Legal Requirements:</strong> To respond to court orders or law enforcement requests.</li>
            <li class="privacy-policy-list-item"><strong>Business Transfers:</strong> If we merge, sell, or transfer our business or part of it to a third party.</li>
        </ul>

        <h2 class="privacy-policy-title">5. Cookies and Tracking Technologies</h2>
        <p class="privacy-policy-text">We use cookies and similar technologies to improve site navigation and user experience. You can control cookies through your browser settings. Refusing cookies may limit website functionality.</p>

        <h2 class="privacy-policy-title">6. Your Data Protection Rights</h2>
        <p class="privacy-policy-text">Depending on your location, you may have the following rights:</p>
        <ul class="privacy-policy-list">
            <li class="privacy-policy-list-item"><strong>Access:</strong> Request a copy of your personal data.</li>
            <li class="privacy-policy-list-item"><strong>Correction:</strong> Rectify inaccurate or incomplete data.</li>
            <li class="privacy-policy-list-item"><strong>Deletion:</strong> Request data deletion under certain conditions.</li>
            <li class="privacy-policy-list-item"><strong>Opt-Out:</strong> Unsubscribe from marketing communications at any time.</li>
        </ul>
        <p class="privacy-policy-text">To exercise these rights, please contact us at &nbsp;<b><a href="mailto:info@tecknify.com">info@tecknify.com</a></b></p>

        <h2 class="privacy-policy-title">7. Third-Party Links</h2>
        <p class="privacy-policy-text">Our website may contain links to external websites. Just On Events is not responsible for their privacy policies. Please review their policies before sharing personal information.</p>

        <h2 class="privacy-policy-title">8. Changes to This Privacy Policy</h2>
        <p class="privacy-policy-text">We may update this Privacy Policy from time to time. Check our website for updates with the effective date indicated.</p>

        <h2 class="privacy-policy-title">9. Contact Us</h2>
        <p class="privacy-policy-text">If you have any questions or concerns about this Privacy Policy, contact us at:</p>
        <address class="privacy-policy-address">
            Just On Events<br>
            Address: 1002/2430, IRC Village, Nayapalli, Bhubaneswar.<br>
            Email: <a href="mailto:example@example.com">example@example.com</a><br>
            Phone: <a href="tel:+919124736030">+91-9124736030</a>
        </address>
        <p class="privacy-policy-thank-you">Thank you for choosing Just On Events.</p>
    </section>
    </article>
  </main>

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
  <script src="<?php echo $tecknify ?>privacy-policy/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>