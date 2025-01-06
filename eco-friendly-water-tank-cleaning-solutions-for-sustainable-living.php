<?php
error_reporting(0);
include('config/config.php');
include 'header.php';
$slug = 'eco-friendly-water-tank-cleaning-solutions-for-sustainable-living';
$query = "SELECT * FROM blogs WHERE url = '$slug'";
$result = $pdo->query($query);
if ($result && $row = $result->fetch(PDO::FETCH_ASSOC)) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo htmlspecialchars($row['title']); ?>">
    <title><?php echo htmlspecialchars($row['title']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJv3s0bO6K06oF3mI1e9j1qHJya7t1jvhzoAIaA4yya5ZZ5uZlfHW4VdHgN" crossorigin="anonymous">
    <script>
        <?php echo $row['seo_head']; ?>
    </script>
    <style>
        .text-muted {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .meta-item {
            padding: 0 10px;
            display: flex;
        }

        .meta-item a {
            text-decoration: none;
            color: #fe4309;
            font-weight: bold;
        }

        .meta-item a:hover {
            text-decoration: underline;
        }
        .content {
            margin-bottom: 50px;
            text-align: justify;
        }
    </style>
</head>

<body>
    <div class="container my-5 px-3">
        <h1 class="display-4 text-center mb-4"><?php echo htmlspecialchars($row['title']); ?></h1>

        <div class="row justify-content-center content">
            <div class="col-md-8">
                <img src="<?php echo $imgurl . htmlspecialchars($row['featured_image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" class="img-fluid mb-4 rounded" style="max-width: 100%; height: auto; object-fit: cover;">

                <div class="mb-4 text-muted">
                    <span class="meta-item"><strong>Author:&nbsp</strong> <a href="author.php?author=<?php echo urlencode($row['author']); ?>"><?php echo htmlspecialchars($row['author']); ?></a></span> |
                    <span class="meta-item"><strong>Posted on:&nbsp</strong> <?php echo date("d-m-Y", strtotime($row['blog_post_date'])); ?></span> |
                    <span class="meta-item"><strong>Category:&nbsp</strong> <a href="category.php?category=<?php echo urlencode($row['category']); ?>"><?php echo htmlspecialchars($row['category']); ?></a></span>
                </div>

                <p class="lead mb-4"><?php echo $row['description']; ?></p>

                <script>
                    <?php echo $row['seo_body']; ?>
                </script>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb6dDDEyx2mBVsPz7zj6mXsRynhz5mkkk9h23OqfF2e8EdP5nD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eylzX4EzfHRBzY2h0zLkI1v6fOsXLV92RoZnABjzXhT0g5Zaa6q1oXx" crossorigin="anonymous"></script>

    <script>
        <?php echo $row['seo_foot']; ?>
    </script>

</body>

</html>
<?php } else {
    echo 'Blog not found.';
} ?>