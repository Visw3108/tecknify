<?php
include("../config/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Home Page</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <header class="header">
    <div class="container">
      <h1>Tecknify Blog</h1>
      <nav>
        <ul class="nav-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="main-content">
    <div class="container">
      <article class="blog-post">
        <h2><a href="#">Blog Post Title 1</a></h2>
        <p class="meta">Posted on November 20, 2024 | by John Doe</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Read more...</a></p>
      </article>

      <article class="blog-post">
        <h2><a href="#">Blog Post Title 2</a></h2>
        <p class="meta">Posted on November 18, 2024 | by Jane Smith</p>
        <p>Proin ac ligula ac quam fermentum malesuada. <a href="#">Read more...</a></p>
      </article>

      <article class="blog-post">
        <h2><a href="#">Blog Post Title 3</a></h2>
        <p class="meta">Posted on November 15, 2024 | by Alex Lee</p>
        <p>Sed sit amet quam id metus auctor pharetra. <a href="#">Read more...</a></p>
      </article>
    </div>
  </main>

  <footer class="footer">
    <div class="container">
      <p>&copy; 2024 Tecknify Blog. All Rights Reserved.</p>
    </div>
  </footer>
</body>

</html>