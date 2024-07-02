<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Email settings
    $to = "manishtamang0842@gmail.com"; // Replace with your email address
    $subject = "New Service Sign-Up";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "Content-Type: text/html; charset=UTF-8";

    // Email message
    $message = "<html><body>";
    $message .= "<h1>Service Sign-Up Details</h1>";
    $message .= "<p><strong>First Name:</strong> " . htmlspecialchars($firstName) . "</p>";
    $message .= "<p><strong>Last Name:</strong> " . htmlspecialchars($lastName) . "</p>";
    $message .= "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    $message .= "<p><strong>Phone Number:</strong> " . htmlspecialchars($phone) . "</p>";
    $message .= "</body></html>";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for signing up! We will contact you shortly.";
    } else {
        echo "There was an error sending your sign-up details. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
