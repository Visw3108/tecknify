<?php
include("../config.php");

// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer classes
require_once 'phpmailer/src/Exception.php';
require_once 'phpmailer/src/PHPMailer.php';
require_once 'phpmailer/src/SMTP.php';

// Get form data from POST
$name = isset($_POST['contact-us-name']) ? $conn->real_escape_string($_POST['contact-us-name']) : '';
$email = isset($_POST['contact-us-email']) ? $conn->real_escape_string($_POST['contact-us-email']) : '';
$phone = isset($_POST['contact-us-phone']) ? $conn->real_escape_string($_POST['contact-us-phone']) : '';
$service = isset($_POST['contact-us-service']) ? $conn->real_escape_string($_POST['contact-us-service']) : '';
$schedule = isset($_POST['contact-us-schedule']) ? $conn->real_escape_string($_POST['contact-us-schedule']) : '';
$comment = isset($_POST['contact-us-comment']) ? $conn->real_escape_string($_POST['contact-us-comment']) : '';

// Validate required fields
if (empty($name) || empty($email) || empty($phone) || empty($service) || empty($schedule)) {
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
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rajat.web71@gmail.com'; // Your email 
        $mail->Password = 'budh jzvs qsod oskg';   // Your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Admin Email Notification
        $mail->setFrom('rajat.web71@gmail.com', 'Tecknify Admin');
        // $mail->setFrom('infotecknify@gmail.com', 'Tecknify Admin');
        $mail->addAddress('rajattecknify0110@gmail.com'); // Admin email

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission by ' . $name;
        $mail->Body = "
        <html>
            <head>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        margin: 0;
                        padding: 20px;
                    }
                    .email-container {
                        background-color: #ffffff;
                        padding: 30px;
                        border-radius: 8px;
                        max-width: 600px;
                        margin: 20px auto;
                        font-size: 14px;
                        line-height: 1.6;
                        color: #333333;
                        border: 1px solid #ddd;
                    }
                    .email-container h1 {
                        font-size: 16px;
                        color: #ff3c00;
                        margin-bottom: 20px;
                        font-weight: bold;
                    }
                    .email-container p {
                        margin: 0;
                        padding: 8px 0;
                        border-bottom: 1px solid #ddd;
                        color: #333333;
                    }
                    .email-container p:last-child {
                        border-bottom: none;
                    }
                    .email-container p strong {
                        font-weight: bold;
                        color: #ff3c00;
                    }
                    .footer {
                        text-align: center;
                        margin-top: 20px;
                        font-size: 12px;
                        color: #999999;
                    }
                    .footer a {
                        color: #ff3c00;
                        text-decoration: none;
                        font-weight: bold;
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
                <div class='footer'>
                    Sent from <a href='https://tecknify.com/'>tecknify</a>
                </div>
            </body>
        </html>";

        $mail->send();

        // User Confirmation Email
        $mail->clearAddresses();
        $mail->addAddress($email, $name); // User's email

        $mail->Subject = 'Thank You for Your Submission';
        $mail->Body = "
        <html>
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
                </style>
            </head>
            <body>
                <div class='email-container'>
                    <h1>Thank You, $name!</h1>
                    <p>We have received your request for <strong>$service</strong>.</p>
                    <p>Our team will get back to you shortly.</p>
                    <p>If you have any further questions, feel free to reach out to us.</p>
                    <a href='https://tecknify.com/contact-us/' class='btn'>Contact Us</a>
                </div>
            </body>
        </html>";

        $mail->send();

        echo "Thank you! Your form has been submitted successfully.<br>We will get back to you soon.";
    } catch (Exception $e) {
        echo "Your form was submitted, but we couldn't send the email. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>