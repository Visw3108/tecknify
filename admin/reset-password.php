<?php
// Include the database configuration
require 'config/config.php';
session_start();

$successMessage = '';
$errorMessage = '';

// Check if email ID is passed in the session
if (!isset($_SESSION['emailid'])) {
    $errorMessage = 'Email ID not found. Please initiate the password reset process again.';
} else {
    $email = $_SESSION['emailid'];
    // print_r($email);exit;

    // Process the form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $new_password = $_POST['new_password'] ?? '';
        $confirm_password = $_POST['confirm_password'] ?? '';

        // Validate inputs
        if (empty($new_password) || empty($confirm_password)) {
            $errorMessage = 'Please fill out both password fields.';
        } elseif ($new_password !== $confirm_password) {
            $errorMessage = 'Passwords do not match. Please try again.';
        } else {
            // Hash the new password
            $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

            try {
                // Update the password in the database
                $stmt = $pdo->prepare("UPDATE user SET password = ?, password_reset_token = NULL, token_expiry = NULL WHERE emailid = ?");
                if ($stmt->execute([$hashed_password, $email])) {
                    $successMessage = 'Your password has been successfully updated. You can now log in.';
                    unset($_SESSION['emailid']); // Clear email from session
                } else {
                    $errorMessage = 'Failed to update the password. Please try again.';
                }
            } catch (PDOException $e) {
                $errorMessage = 'Database error: ' . $e->getMessage();
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="../admin/">
        <img src="https://tecknify.com/wp-content/uploads/2024/07/Tecknify-Logo-1536x1164-1.png" alt="Logo" class="me-2" height="40px" width="50px">
        Tecknify Admin
      </a>
    </div>
  </nav>

  <!-- Page Heading -->
  <h2 class="text-center mt-9">Reset Password</h2>
  <p class="text-center">Enter your new password below.</p>

  <!-- Success or Error Message -->
  <?php if (!empty($successMessage)): ?>
    <div class="alert alert-success" role="alert">
      <?php echo $successMessage; ?>
    </div>
  <?php elseif (!empty($errorMessage)): ?>
    <div class="alert alert-danger" role="alert">
      <?php echo $errorMessage; ?>
    </div>
  <?php endif; ?>

  <!-- Reset Password Form -->
  <div class="container mt-4 col-md-4">
    <div class="form-container">
      <form method="POST" action="">
        
        <div class="mb-3">
          <label for="new-password" class="form-label">New Password</label>
          <input type="password" name="new_password" class="form-control" id="new-password" placeholder="Enter new password" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Confirm Password</label>
          <input type="password" name="confirm_password" class="form-control" id="confirm-password" placeholder="Confirm new password" required>
        </div>
        <button type="submit" name="reset_password" class="btn btn-primary w-100">Reset Password</button>
        <div class="text-center mt-3">
          <a href="./" class="btn btn-link">Back to Login</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>