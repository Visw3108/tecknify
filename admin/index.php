<?php
include("config/config.php");

// Registration Process
if (isset($_POST['register'])) {
  // Validate registration inputs
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];

  if (empty($email) || empty($password) || empty($confirmPassword)) {
    echo "All fields are required for registration.";
    exit();
  }

  if ($password !== $confirmPassword) {
    echo "Passwords do not match.";
    exit();
  }

  // Check if email already exists in the database
  $stmt = $pdo->prepare("SELECT * FROM user WHERE emailid = ?");
  $stmt->bindParam(1, $email);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
    echo "Email already exists.";
    exit();
  }

  // Hash the password for secure storage
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Insert the new user into the database
  $stmt = $pdo->prepare("INSERT INTO user (emailid, password) VALUES (?, ?)");
  $stmt->bindParam(1, $email);
  $stmt->bindParam(2, $hashedPassword);

  if ($stmt->execute()) {
    // Success message
    $successMessage = "Registered Successfully. Please Login.";
  } else {
    echo "Error: " . $stmt->errorInfo()[2];
  }
}

// Check if the form is submitted
if (isset($_POST['login'])) {
  // Get the email and password from the form
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validate email and password
  if (empty($email) || empty($password)) {
    echo "Please fill in both email and password.";
  } else {
    // Check if the email exists in the database
    $stmt = $pdo->prepare("SELECT * FROM user WHERE emailid = ?");
    $stmt->bindParam(1, $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      $user = $stmt->fetch(PDO::FETCH_ASSOC);

      // Verify the password using password_verify() if passwords are hashed
      if (password_verify($password, $user['password'])) {
        
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['emailid'];

        header("Location: dashboard/index-blog");
        exit(); // Stop further script execution
      } else {
        echo "Invalid email or password.";
      }
    } else {
      echo "Invalid email or password.";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Sign Up</title>
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
  <h2>Welcome to Tecknify Admin</h2>
  <!-- Success Message -->
  <?php if (!empty($successMessage)): ?>
    <div class="alert alert-success" role="alert">
      <?php echo $successMessage; ?>
    </div>
  <?php endif; ?>

  <!-- Login & Sign Up Form -->
  <div class="container mt-4 col-md-4">
    <div class="form-container">
      <ul class="nav nav-tabs" id="loginSignupTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">
            Login
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab" aria-controls="signup" aria-selected="false">
            Sign Up
          </button>
        </li>
      </ul>
      <div class="tab-content" id="loginSignupContent">

        <!-- Login Tab -->
        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
          <form method="POST">
            <div class="mb-3">
              <label for="loginEmail" class="form-label">Email address</label>
              <input type="email" class="form-control" id="loginEmail" name="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <label for="loginPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Enter your password">
            </div>
            <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
            <div class="text-center mt-3">
              <a href="forgot-password" id="forgotPassword" class="forgot-password-link">Forgot Password?</a>
            </div>
          </form>
        </div>

        <!-- Sign Up Tab -->
        <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
          <!-- Sign Up Form with POST Method -->
          <form method="POST" action="">
            <div class="mb-3">
              <label for="signupEmail" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="signupEmail" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label for="signupPassword" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="signupPassword" placeholder="Create a password" required>
            </div>
            <div class="mb-3">
              <label for="signupConfirmPassword" class="form-label">Confirm Password</label>
              <input type="password" name="confirmPassword" class="form-control" id="signupConfirmPassword" placeholder="Confirm your password" required>
            </div>
            <button type="submit" name="register" class="btn btn-success w-100">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>