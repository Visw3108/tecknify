<?php
include('config/config.php');
$slug = 'how-long-did-the-attack-on-pearl-harbor-last';
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
    <?php echo $row['seo_head']; ?>
</head>
<body>
    <h1><?php echo htmlspecialchars($row['title']); ?></h1>
    <img src="<?php echo $imgurl . htmlspecialchars($row['featured_image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>">
    <p><?php echo $row['description']; ?></p>
    <?php echo $row['seo_body']; ?>
    <?php echo $row['seo_foot']; ?>
</body>
</html>
<?php } else { echo 'Blog not found.'; } ?>