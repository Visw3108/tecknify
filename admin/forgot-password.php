<?php
// Include the database configuration
require 'config/config.php';
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load the PHPMailer classes from the src folder
require_once 'phpmailer/src/Exception.php';
require_once 'phpmailer/src/PHPMailer.php';
require_once 'phpmailer/src/SMTP.php';

// Set the timezone to Asia/Kolkata
date_default_timezone_set('Asia/Kolkata');

// Initialize messages
$successMessage = '';
$errorMessage = '';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Validate the email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        try {
            // Check if the email exists in the database
            $stmt = $pdo->prepare("SELECT id FROM user WHERE emailid = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                // Generate a random token and set expiry time
                $token = bin2hex(random_bytes(16));
                $expiry = date('Y-m-d H:i:s', strtotime('+1 hour')); // Token valid for 1 hour in Kolkata timezone

                // Update the token and expiry in the database
                $updateStmt = $pdo->prepare("UPDATE user SET password_reset_token = ?, token_expiry = ? WHERE emailid = ?");
                if ($updateStmt->execute([$token, $expiry, $email])) {
                    // Send the token via email
                    $mail = new PHPMailer(true);
                    try {
                        // PHPMailer settings
                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP host
                        $mail->SMTPAuth = true;
                        $mail->Username = 'infotecknify@gmail.com'; // Replace with your email
                        $mail->Password = 'obst ondn ivez nreb';   // Replace with your password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                        $mail->Port = 587;

                        // Email settings
                        $mail->setFrom('infotecknify@gmail.com', 'Tecknify Admin');
                        $mail->addAddress($email);
                        $mail->isHTML(true);
                        $mail->Subject = 'Reset Your Password';
                        $mail->Body = "
                            <p>Hello,</p>
                            <p>You requested to reset your password. Please click the link below to reset your password:</p>
                            <p><a href='{$baseurl}reset-password'>Click here to reset your password</a></p>
                            <p>This link will expire in 1 hour.</p>
                            <p>If you did not request this, please ignore this email.</p>
                            <p>Regards,<br>Tecknify Admin</p>";
                        $mail->AltBody = "Hello,\n\nYou requested to reset your password. Use the link below:\n\n{$baseurl}reset-password.php\n\nThis link will expire in 1 hour.\n\nIf you did not request this, ignore this email.\n\nRegards,\nTecknify Admin";

                        $mail->send();
                        $_SESSION['emailid'] = $email; // Store email in session
                        $successMessage = 'Password reset mail sent to your registered mail successfully. Check back the Gmail.';
                    } catch (Exception $e) {
                        $errorMessage = "Failed to send email. Error: {$mail->ErrorInfo}";
                    }
                } else {
                    $errorMessage = 'Failed to update reset token. Please try again.';
                }
            } else {
                $errorMessage = 'Email not found in our records.';
            }
        } catch (Exception $e) {
            $errorMessage = "An error occurred: " . $e->getMessage();
        }
    } else {
        $errorMessage = 'Invalid email address.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
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
  <h2 class="text-center mt-9">Forgot Password</h2>
  <p class="text-center">Enter your email address to reset your password.</p>

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

  <!-- Forgot Password Form -->
  <div class="container mt-4 col-md-4">
    <div class="form-container">
      <form method="POST" action="">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary w-100">Reset Password</button>
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