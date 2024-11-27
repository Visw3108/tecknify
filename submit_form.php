<?php
include("config.php");

// Handle Website Address Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['website_address'])) {
    $website_address = mysqli_real_escape_string($conn, $_POST['website_address']);

    // Check if website address is provided
    if (!empty($website_address)) {
        // Use a prepared statement for security
        $stmt = $conn->prepare("INSERT INTO websites (website_address) VALUES (?)");
        $stmt->bind_param("s", $website_address);

        if ($stmt->execute()) {
            echo json_encode(["message" => "Website address submitted successfully!"]);
        } else {
            echo json_encode(["message" => "Error: " . $stmt->error]);
        }

        $stmt->close();
    } else {
        echo json_encode(["message" => "Website address is required."]);
    }
}

// Handle Proposal Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate name, email, and message before insertion
    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message)) {
        // Use prepared statement for insertion
        $stmt = $conn->prepare("INSERT INTO proposals (name, email, message, created_at) VALUES (?, ?, ?, NOW())");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            echo "Proposal request submitted successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "All fields are required and email must be valid.";
    }
}

// Handle Newsletter Form Submission
if (isset($_POST['email_address'])) {
    $email = $_POST['email_address'];

    // Check for valid email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $stmt = $conn->prepare("INSERT INTO newsletter (email, createdDt) VALUES (?, NOW())");
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            echo "Thank you for subscribing!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Invalid email address.";
    }
}

$conn->close();
?>