<?php
include("config.php");

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

// Check if the form data has been received via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];  // This is the "message" field

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO proposals (name, email, message, created_at) VALUES (?, ?, ?, now())");
    $stmt->bind_param("sss", $name, $email, $message);

    // Execute the query and check for success
    if ($stmt->execute()) {
        echo "Proposal request submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

$conn->close();
?>