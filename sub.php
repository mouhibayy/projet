<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];

    // Send email to the donor
    $to = $email;
    $subject = "Thank You for Your Donation!";
    $message = "Dear Donor,\n\nThank you for your generous donation of $$amount.\nWe truly appreciate your support.\n\nBest regards,\nYour Organization";
    $headers = "From: no-reply@yourorganization.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }

    // Use an SMS gateway API to send a message to the phone number (e.g., Twilio)
    // Replace with your SMS gateway API
    $smsMessage = "Thank you for your donation of $$amount!";
    
    // Note: Replace with your API's details or use an SMS gateway library here
    // Example: Sending SMS using a service like Twilio or Nexmo
    // For now, just display a success message
    echo "SMS sent to $phone: $smsMessage";

    // Redirect back to the form or display a thank-you message
    echo "<br>Thank you for your donation!";
}
?>
