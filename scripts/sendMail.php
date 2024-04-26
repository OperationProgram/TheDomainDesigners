<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function sendMail($args) {

    extract($args);
    // Email parameters
    $to = 'metameg8@gmail.com'; 
    $subject = 'New Contact Form Submission';

    // Compose email message
   
    if (isset($fname)) {
        $body = "First Name: $fname\n";
    }
    $body = "Last Name: \n$lname\n";
    $body .= "Email: \n$email\n";
    if (isset($phone)) {
        $body .= "Phone:\n$phone\n";
    }
    if (isset($company)) {
        $body .= "Company:\n$company\n";
    }
    if (isset($website)) {
        $body .= "Website:\n$website\n";
    }
    $body .= "Message:\n$message\n";

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'metameg8@gmail.com'; // Replace with your Gmail email address
        $mail->Password = 'sicj budg xvvt oyde'; // Replace with your Gmail password or app password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $lname);
        $mail->addAddress($to);

        // Content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $body;

        // Send email
        if($mail->send()){
            // echo "Thank you! Your message has been sent.";
            return "success";
        } else{
            // echo "Oops! Something went wrong. Please try again later. Error: {$mail->ErrorInfo}";
            return "Email not sent. Please try again";
        }
    
    } catch (Exception $e) {
        echo "Oops! Something went wrong. Please try again later. Error: {$mail->ErrorInfo}";
    }
}
?>