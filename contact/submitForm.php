<?php
include("../config.php");

// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; // Correctly reference the Exception class

// Load PHPMailer classes from the src folder
require_once 'phpmailer/src/Exception.php'; // Ensure this file path is correct
require_once 'phpmailer/src/PHPMailer.php'; // Ensure this file path is correct
require_once 'phpmailer/src/SMTP.php'; // Ensure this file path is correct

// Get form data from POST
$name = isset($_POST['name']) ? $conn->real_escape_string($_POST['name']) : '';
$email = isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : '';
$phone = isset($_POST['phone']) ? $conn->real_escape_string($_POST['phone']) : '';
$service = isset($_POST['service']) ? $conn->real_escape_string($_POST['service']) : '';
$schedule = isset($_POST['schedule']) ? $_POST['schedule'] : '';
$comment = isset($_POST['comment']) ? $conn->real_escape_string($_POST['comment']) : '';

// Convert $schedule to a string if it's an array
if (is_array($schedule)) {
    $schedule = implode(', ', $schedule); // Join array elements into a comma-separated string
    $schedule = $conn->real_escape_string($schedule); // Escape the resulting string
}

// Validate required fields
if (empty($name) || empty($email) || empty($phone) || empty($service)) {
    echo "Please fill all required fields.";
    exit;
}

// Insert data into the database
$sql = "INSERT INTO contact_form (name, email, phone, service, schedule, comment) VALUES ('$name', '$email', '$phone', '$service', '$schedule', '$comment')";

if ($conn->query($sql) === TRUE) {
    // Prepare email
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'rajat.web71@gmail.com'; // Your email
        $mail->Password = 'budh jzvs qsod oskg';   // Your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // 1. **Admin Email Body (Admin Notification)**

        // Recipients
        $mail->setFrom('rajat.web71@gmail.com', 'Tecknify Admin');
        $mail->addAddress('rajattecknify0110@gmail.com'); // Admin's email

        // Admin Email Body Content
        $emailBodyAdmin = "<html>
                            <head>
                                <style>
                                    body {
                                        font-family: Arial, sans-serif;
                                        background-color: #f4f4f4;
                                        padding: 20px;
                                    }
                                    .email-container {
                                        background-color: #ffffff;
                                        padding: 30px;
                                        border-radius: 5px;
                                        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                                        max-width: 600px;
                                        margin: 0 auto;
                                    }
                                    h1 {
                                        color: #333333;
                                        font-size: 24px;
                                        margin-bottom: 20px;
                                    }
                                    p {
                                        font-size: 16px;
                                        color: #333333;
                                        line-height: 1.6;
                                        margin: 10px 0;
                                    }
                                    .footer {
                                        font-size: 14px;
                                        color: #888888;
                                        margin-top: 20px;
                                        text-align: center;
                                    }
                                </style>
                            </head>
                            <body>
                                <div class='email-container'>
                                    <h1>New Contact Form Submission</h1>
                                    <p><strong>Name:</strong> $name</p>
                                    <p><strong>Email:</strong> $email</p>
                                    <p><strong>Phone:</strong> $phone</p>
                                    <p><strong>Service:</strong> $service</p>
                                    <p><strong>Schedule:</strong> $schedule</p>
                                    <p><strong>Comment:</strong> $comment</p>
                                </div>
                            </body>
                        </html>";

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission by '.$name;
        $mail->Body    = $emailBodyAdmin;

        // Send the admin email
        $mail->send();

        // 2. **User Confirmation Email Body (Thank You Email)**

        // Recipients
        $mail->clearAddresses();  // Clear previous recipient
        $mail->addAddress($email, $name); // User's email

        // User Confirmation Email Body Content
        $emailBodyUser = "<html>
                            <head>
                                <style>
                                    body {
                                        font-family: Arial, sans-serif;
                                        background-color: #f4f4f9;
                                        padding: 20px;
                                        margin: 0;
                                    }
                                    .email-container {
                                        background-color: #ffffff;
                                        padding: 30px;
                                        border-radius: 8px;
                                        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                                        max-width: 600px;
                                        margin: 0 auto;
                                        text-align: center;
                                    }
                                    h1 {
                                        color: #333333;
                                        font-size: 28px;
                                        margin-bottom: 20px;
                                    }
                                    p {
                                        font-size: 16px;
                                        color: #333333;
                                        line-height: 1.6;
                                        margin: 10px 0;
                                    }
                                    .btn {
                                        display: inline-block;
                                        padding: 12px 20px;
                                        font-size: 16px;
                                        background-color: #4CAF50;
                                        color: white;
                                        text-decoration: none;
                                        border-radius: 5px;
                                        margin-top: 20px;
                                    }
                                    .btn:hover {
                                        background-color: #45a049;
                                    }
                                    .footer {
                                        font-size: 14px;
                                        color: #888888;
                                        margin-top: 30px;
                                        text-align: center;
                                    }
                                </style>
                            </head>
                            <body>
                                <div class='email-container'>
                                    <h1>Thank You, $name!</h1>
                                    <p>We have received your request for <strong>$service</strong>.</p>
                                    <p>Our team will get back to you shortly at <strong>$phone</strong>.</p>
                                    <p>If you have any further questions, feel free to reach out!</p>
                                    <a href='https://tecknify.com/contact-us/' class='btn'>Contact Us</a>
                                    <div class='footer'>
                                        <p>Best regards,<br>Tecknify Team</p>
                                    </div>
                                </div>
                            </body>
                        </html>";

        $mail->isHTML(true);
        $mail->Subject = 'Thank You for Your Submission';
        $mail->Body    = $emailBodyUser;

        // Send the user confirmation email
        $mail->send();

        // Success message
        echo "Thank you! Your form has been submitted successfully.<br>We will get back to you soon.";
    } catch (Exception $e) {
        // Error handling
        echo "Your form was submitted, but we couldn't send the email. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>