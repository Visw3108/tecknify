<?php
include ("config.php");

// Handle Website Address Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['website_address'])) {
    $website_address = mysqli_real_escape_string($conn, $_POST['website_address']);

    if (!empty($website_address)) {
        $sql = "INSERT INTO websites (website_address) VALUES ('$website_address')";
        
        if ($conn->query($sql) === TRUE) {
            echo json_encode(["message" => "Website address submitted successfully!"]);
        } else {
            echo json_encode(["message" => "Error: " . $sql . "<br>" . $conn->error]);
        }
    } else {
        echo json_encode(["message" => "Website address is required."]);
    }
}

// Handle Contact Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";
        
        if ($conn->query($sql) === TRUE) {
            echo json_encode(["message" => "Contact form submitted successfully!"]);
        } else {
            echo json_encode(["message" => "Error: " . $sql . "<br>" . $conn->error]);
        }
    } else {
        echo json_encode(["message" => "All fields are required."]);
    }
}

$conn->close();
?>
