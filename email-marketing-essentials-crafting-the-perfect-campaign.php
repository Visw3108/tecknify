<?php
include('config/config.php');
$slug = 'email-marketing-essentials-crafting-the-perfect-campaign';
$query = "SELECT * FROM blogs WHERE url = '$slug'";
$result = $pdo->query($query);
if ($result && $row = $result->fetch(PDO::FETCH_ASSOC)) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo htmlspecialchars($row['title']); ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo htmlspecialchars($row['excerpt']); ?>">
    <?php echo $row['seo_head']; ?>
</head>
<body>
    <h1><?php echo htmlspecialchars($row['title']); ?></h1>
    <p><?php echo $row['description']; ?></p>
    <?php echo $row['seo_body']; ?>
    <?php echo $row['seo_foot']; ?>
</body>
</html>
<?php } else { echo 'Blog not found.'; } ?>