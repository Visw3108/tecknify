<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tecknify - Smart Ideas for your Brand are Here</title>
  <link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cuprum:wght@500;600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="preload" as="image" href="../assets/images/hero-banner.png">
  <style>
    .category-sec {
      margin-top: 130px;
      margin-bottom: 50px;
      padding-left: 50px;
      padding-right: 50px;
    }

    h2 {
      text-align: center;
    }

    /* Card container styling */
    .card-container {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      /* 4 equal-width columns */
      gap: 20px;
      padding: 0 20px;
      margin-top: 30px;
    }

    .card {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s ease-in-out;
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-bottom: 2px solid #ddd;
    }

    .card h3 {
      font-size: 1.2rem;
      color: #333;
      padding: 15px;
      text-align: center;
    }

    /* Hover effect for the card */
    .card:hover {
      transform: translateY(-10px);
    }

    /* Responsive adjustments for card container */
    @media (max-width: 1200px) {
      .card-container {
        grid-template-columns: repeat(3, 1fr);
        /* 3 columns on medium screens */
      }
    }

    @media (max-width: 900px) {
      .card-container {
        grid-template-columns: repeat(2, 1fr);
        /* 2 columns on small screens */
      }
    }

    @media (max-width: 600px) {
      .card-container {
        grid-template-columns: 1fr;
        /* 1 column on extra small screens */
      }
    }
  </style>
</head>

<body>

  <header class="header" data-header>
    <div class="container">
      <a href="../" class="logo">
        <img src="../assets/images/Tecknify-Logo.png" alt="Hoolix Logo">
      </a>

      <nav class="navbar" data-navbar>
        <div class="wrapper">
          <a href="../" class="logo">
            <img src="../assets/images/Tecknify-Logo.png" alt="Hoolix Logo">
          </a>
          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">
          <li><a href="../" class="navbar-link" data-nav-link>Home</a></li>
          <li><a href="../about/" class="navbar-link" data-nav-link>About</a></li>
          <li class="dropdown">
            <a href="../service/" class="navbar-link" data-nav-link>Services</a>
            <ul class="dropdown-menu">
              <li><a href="../service/seo-optimization/" class="dropdown-link">SEO Optimization</a></li>
              <li><a href="../service/social-media-marketing/" class="dropdown-link">Social Medial Marketing</a></li>
              <li><a href="../service/ppc-advertising/" class="dropdown-link">PPC Advertising</a></li>
              <li><a href="../service/web-development/" class="dropdown-link">Web Development</a></li>
              <li><a href="../service/app-development/" class="dropdown-link">App Development</a></li>
              <li><a href="../service/content-marketing/" class="dropdown-link">Content Marketing</a></li>
            </ul>
          </li>
          <li><a href="../portfolio/" class="navbar-link" data-nav-link>Portfolio</a></li>
          <li><a href="../blog/" class="navbar-link" data-nav-link>Blog</a></li>
          <li><a href="../contact/" class="navbar-link" data-nav-link>Contact Us</a></li>
        </ul>
      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <a href="#" class="btn-outline">Let's talk</a>
      <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
  </header>

  <section class="category-sec">
    <?php
    require_once 'config.php'; // Include your database connection file

    // Get the category value from the URL
    $category = isset($_GET['category']) ? urldecode($_GET['category']) : '';

    // Handle cases where category is empty
    if (empty($category)) {
      echo "No category specified.";
    } else {
      echo "<h2>Posts in Category: " . htmlspecialchars($category) . "</h2>";
    }

    try {
      // Fetch posts for the selected category
      $stmt = $pdo->prepare("SELECT * FROM blogs WHERE category = :category ORDER BY blog_post_date DESC");
      $stmt->bindParam(':category', $category);
      $stmt->execute();
      $posts = $stmt->fetchAll();

      if ($posts) {
        // echo "<h2>Posts in Category: " . htmlspecialchars($category) . "</h2>";
        echo "<div class='card-container'>";

        foreach ($posts as $post) {
          $title = htmlspecialchars($post['title']);
          $image = htmlspecialchars($imgurl . $post['featured_image']);
          $url = htmlspecialchars($post['url']);

          // Display each post inside a card
          echo "<div class='card'>";
          echo "<a href='../" . $url . "'>";
          echo "<img src='" . $image . "' alt='" . $title . "' />";
          echo "<h3>" . $title . "</h3>";
          echo "</a>";
          echo "</div>";
        }

        echo "</div>"; // Close card container
      } else {
        echo "<p>No posts available in this category.</p>";
      }
    } catch (PDOException $e) {
      echo "<p>Error fetching posts: " . htmlspecialchars($e->getMessage()) . "</p>";
    }
    ?>
  </section>

  <footer class="footer">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="../assets/images/tecknify-logo1.png" alt="Hoolix Logo" class="logo-img">
          </a>

          <p class="footer-text">
            Lorem ipsum dolor sit amet consecte tur adipisicing elit, sed do eiusmod tempor incididunt ut
            labore.
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Enter your email" required
              class="email-field">
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
            <a href="#" class="footer-link">Strategy & Research</a>
          </li>

          <li>
            <a href="#" class="footer-link">Web Development</a>
          </li>

          <li>
            <a href="#" class="footer-link">Web Solution</a>
          </li>

          <li>
            <a href="#" class="footer-link">Digital Merketing</a>
          </li>

          <li>
            <a href="#" class="footer-link">App Design</a>
          </li>

          <li>
            <a href="#" class="footer-link">App Development</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Company</p>
          </li>

          <li>
            <a href="#" class="footer-link">About Company</a>
          </li>

          <li>
            <a href="#" class="footer-link">Our Services</a>
          </li>

          <li>
            <a href="#" class="footer-link">Our Portfolio</a>
          </li>

          <li>
            <a href="#" class="footer-link">Our Blog</a>
          </li>

          <li>
            <a href="#" class="footer-link">Latest News</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
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
                <a href="https://www.facebook.com/tecknifyitsolutions" class="social-link"
                  target="_blank">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="https://x.com/tecknify2023" class="social-link" target="_blank">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="https://www.instagram.com/tecknify_it_solutions/" class="social-link"
                  target="_blank">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

              <li>
                <a href="https://www.linkedin.com/company/tecknify-it-solutions" class="social-link"
                  target="_blank">
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
          &copy; 2022 | All Rights Reserved by <a href="#" class="copyright-link">Tecknify</a>
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

  <script src="script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>