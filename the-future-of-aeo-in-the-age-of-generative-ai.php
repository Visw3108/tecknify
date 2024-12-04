<?php
include('config/config.php');
$slug = 'the-future-of-aeo-in-the-age-of-generative-ai';
$query = "SELECT * FROM blogs WHERE url = '$slug'";
$result = $pdo->query($query);
if ($result && $row = $result->fetch(PDO::FETCH_ASSOC)) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title><?php echo htmlspecialchars($row['title']); ?></title>
        <meta charset="UTF-8">
        <meta name="description" content="<?php echo htmlspecialchars($row['title']); ?>">
        <script>
            <?php echo $row['seo_head']; ?>
        </script>
    </head>

    <body>
        <h1><?php echo htmlspecialchars($row['title']); ?></h1>
        <img src="<?php echo $imgurl . htmlspecialchars($row['featured_image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>">
        <p><?php echo $row['description']; ?></p>
        <script>
            <?php echo $row['seo_body']; ?>
        </script>

        <footer class="footer">
            <div class="footer-top section">
                <div class="container">
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <p class="copyright">&copy; 2024 | All Rights Reserved by <a href="#" class="copyright-link">Tecknify</a></p>
                </div>
            </div>
            <script>
                <?php echo strip_tags ($row['seo_foot']) ?>
            </script>
        </footer>
    </body>

    </html>
<?php } else {
    echo 'Blog not found.';
} ?>