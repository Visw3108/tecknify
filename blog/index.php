<?php
error_reporting(0);
require_once "../config/config.php";
include("config.php");

try {
  // Fetch distinct categories
  $categoriesQuery = "SELECT DISTINCT category FROM blogs";
  $categoriesStmt = $pdo->query($categoriesQuery);
  $categories = $categoriesStmt->fetchAll();

  // Fetch all blogs
  $blogsQuery = "SELECT * FROM blogs";
  $blogsStmt = $pdo->query($blogsQuery);
  $blogs = $blogsStmt->fetchAll();
} catch (PDOException $e) {
  die("Error fetching data: " . $e->getMessage());
}
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
  <link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="styles.css">

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
  <link rel="preload" as="image" href="../assets/images/hero-banner.png">
  <style>
    .tags-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      justify-content: flex-start;
      margin-top: 10px;
    }

    .tag-button {
      display: inline-block;
      padding: 8px 16px;
      background-color: #007BFF;
      color: #fff;
      text-align: center;
      border: none;
      border-radius: 20px;
      font-size: 14px;
      text-decoration: none;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .tag-button:hover {
      background-color: #ff3c00;
      transform: scale(1.05);
      font-weight: 500;
    }

    .tag-button:active {
      background-color: #003f7f;
      transform: scale(0.95);
    }

    .categories-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      justify-content: flex-start;
      margin-top: 10px;
    }

    .category-button {
      display: inline-block;
      padding: 8px 16px;
      background-color: #28a745;
      /* Green background for categories */
      color: #fff;
      text-align: center;
      border: none;
      border-radius: 20px;
      font-size: 14px;
      text-decoration: none;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .category-button:hover {
      background-color: #218838;
      transform: scale(1.05);
      font-weight: 500;
    }

    .category-button:active {
      background-color: #1e7e34;
      /* Even darker green when active */
      transform: scale(0.95);
    }
    .blog-categories {
      margin-top: 30px;
    }
    .blog-tags {
      margin-top: 50px;
    }
  </style>

</head>

<body>

  <!-- 
    - #HEADER
  -->

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
              <li><a href="../service/seo/" class="dropdown-link">Search Engine Optimization</a></li>
              <li><a href="../service/smm/" class="dropdown-link">Social Medial Marketing</a></li>
              <li><a href="../service/ppc/" class="dropdown-link">PPC Advertising</a></li>
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

      <div class="content-wrapper">
        <div class="content-container">
          <div class="our-blogs-wrapper">
            <!-- Main Blogs Section -->
            <section class="our-blogs-main">
              <!-- Blog Categories Section -->
              <div class="our-blogs-categories">
                <button class="our-blogs-filter-btn active" data-category="all">All</button>
                <?php foreach ($categories as $category): ?>
                  <button class="our-blogs-filter-btn" data-category="<?php echo htmlspecialchars($category['category']); ?>">
                    <?php echo htmlspecialchars($category['category']); ?>
                  </button>
                <?php endforeach; ?>
              </div>

              <!-- Blog Cards Section -->
              <div class="our-blogs-projects">
                <?php foreach ($blogs as $blog): ?>
                  <div class="our-blogs-project" data-category="<?php echo htmlspecialchars($blog['category']); ?>">
                    <a href="<?php echo $tecknify ?><?= $blog['url'] ?>">
                      <img src="<?php echo htmlspecialchars($imgurl . $blog['featured_image']); ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>">
                      <div class="our-blogs-info">
                        <h3><?php echo htmlspecialchars($blog['title']); ?></h3>
                      </div>
                    </a>
                    <p class="our-blogs-meta">
                      <a href="<?php echo $tecknify.'author.php?author='.$blog['author'] ?>" class="our-blogs-author-link">By <?php echo htmlspecialchars($blog['author']); ?></a> |
                      <?php echo (new DateTime($blog['blog_post_date']))->format('d-m-Y'); ?>
                    </p>
                    <a href="../<?= $blog['url'] ?>">
                      <button class="our-blogs-read-more-btn">Read More</button>
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
            </section>
          </div>

          <!-- Recent Posts Section -->
          <aside class="our-blogs-recent-posts">
            <h2 class="recent-posts-heading">Recent Posts</h2>
            <?php
            require_once 'config.php';

            try {
              // Fetch the last 10 blogs ordered by most recent date
              $stmt = $pdo->prepare("SELECT * FROM blogs ORDER BY blog_post_date DESC LIMIT 10");
              $stmt->execute();
              $recentBlogs = $stmt->fetchAll();

              if ($recentBlogs) {
                foreach ($recentBlogs as $blog) {
                  $title = htmlspecialchars($blog['title']);
                  $image = htmlspecialchars($imgurl . $blog['featured_image']);
                  $url = htmlspecialchars($blog['url']);
            ?>
                  <a href="../<?= $url ?>" class="our-blogs-card">
                    <div class="our-blogs-card-image">
                      <img src="<?= $image ?>" alt="<?= $title ?>">
                    </div>
                    <div class="our-blogs-card-content">
                      <h4><?= $title ?></h4>
                    </div>
                  </a>
            <?php
                }
              } else {
                echo "<p>No recent posts available.</p>";
              }

              // Fetch all unique categories
              $categoryStmt = $pdo->prepare("SELECT DISTINCT category FROM blogs");
              $categoryStmt->execute();
              $categories = $categoryStmt->fetchAll(PDO::FETCH_COLUMN);

              if ($categories) {
                echo '<div class="blog-categories">';
                echo '<h2 class="recent-posts-heading">Blog Categories</h2>';
                echo '<div class="categories-grid">';
                foreach ($categories as $category) {
                  $safeCategory = htmlspecialchars($category);
                  echo "<a href='category.php?category=" . urlencode($safeCategory) . "' class='category-button'>" . $safeCategory . "</a>";
                }
                echo '</div>';
                echo '</div>';
              } else {
                echo "<div class='blog-categories'><p>No categories available.</p></div>";
              }

              // Fetch and split all tags
              $tagStmt = $pdo->prepare("SELECT tags FROM blogs");
              $tagStmt->execute();
              $allTags = $tagStmt->fetchAll(PDO::FETCH_COLUMN);

              $uniqueTags = [];
              foreach ($allTags as $tagString) {
                $tagsArray = array_map('trim', explode(',', $tagString)); // Split and trim each tag
                $uniqueTags = array_merge($uniqueTags, $tagsArray); // Merge tags into the uniqueTags array
              }

              $uniqueTags = array_unique($uniqueTags); // Remove duplicate tags

              if ($uniqueTags) {
                echo '<div class="blog-tags">';
                echo '<h2 class="recent-posts-heading">Blog Tags</h2>';
                echo '<div class="tags-grid">';
                foreach ($uniqueTags as $tag) {
                  $safeTag = htmlspecialchars($tag);
                  echo "<a href='tag.php?tags=" . urlencode($safeTag) . "' class='tag-button'>" . $safeTag . "</a>";                  
                }
                echo '</div>';
                echo '</div>';
              } else {
                echo "<div class='blog-tags'><p>No tags available.</p></div>";
              }
            } catch (PDOException $e) {
              echo "<p>Error fetching data: " . htmlspecialchars($e->getMessage()) . "</p>";
            }
            ?>
          </aside>
        </div>
      </div>
    </article>
  </main>

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
          <a href="<?php echo $tecknify ?>privacy-policy" class="footer-bottom-link" target="_blank">Privacy Policy</a>
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

</body>

</html>