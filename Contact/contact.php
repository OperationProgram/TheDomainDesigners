<?php require("../scripts/sendMail.php"); ?>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(empty($_POST['email']) || empty($_POST['fname']) ||  empty($_POST['lname']) || empty($_POST['phone'])){
         $response = "Email, Name, and Phone fields required";
      } else{
         $response = sendMail(['email' => $_POST['email'], 
                              'fname' => $_POST['fname'],
                              'lname' => $_POST['lname'],
                              'phone' => $_POST['phone'],
                              'company' => $_POST['company'],
                              'website' => $_POST['website'],
                              'message' =>  $_POST['message'],
                            ]);
      }
      echo '<script>window.location = "#submit_btn";</script>';
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get in Touch</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="../Navigation/nav-bar.css">
</head>
<body>

    <header>
        <script src="../scripts/navigationLoader.js"></script>
    </header>

    <div class="container">

        <div class="overlay">
            <div class="overlay-container">
                <h2>CHECK THIS OUT</h2>
                <p>We're excited to announce that we're offering our first three websites for free! This special offer is part of our new venture into the freelance world. Our goal is to build a thriving community of clients and collaborators, and we believe that providing high-quality websites at no cost is a fantastic way to kickstart this journey.</p>
            </div>
         
        </div>

        <div class="left-column">
            <h2>Contact Us</h2>
            <p>If you have any questions, feedback, or inquiries, please don't hesitate to reach out to us. Our team is here to assist you with any concerns you may have. Whether you're looking for more information about our products or services, want to discuss a partnership opportunity, or simply want to say hello, we're always eager to hear from you. Feel free to use the contact form below to send us a message, and we'll get back to you as soon as possible. Thank you for considering us, and we look forward to connecting with you!</p>
            <img src="../assets/contact-image-transparent.png" alt="Image Description">
        </div>
        <div class="right-column">
            <h2>Tell Us More</h2>
            <form action="" method="post" class="contact-form" >
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" placeholder="First name" >
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" placeholder="Last name" >
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="Your phone number" >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your email address" >
                </div>
                <div class="form-group">
                    <label for="company">Company Name</label>
                    <input type="text" id="company" name="company" placeholder="Your company name">
                </div>
                
                <div class="form-group">
                    <label for="website">Company Website</label>
                    <input type="url" id="website" name="website" placeholder="Your company website">
                </div>

                <!-- <div class="form-group checkboxes">
                    <label>Interests</label>
                    <div class="checkbox-grid">
                        <input type="checkbox" id="checkbox1" name="interests" value="Option 1">
                        <label for="checkbox1">Option 1</label>
                    </div>
                </div> -->
                <div class="form-group full-row">
                    <label for="message">Your Concept</label>
                    <textarea id="message" name="message" placeholder="Whats your vision?"></textarea>
                </div>
                
                <button id="submit_btn" class="full-row" type="submit">Submit</button>
                <?php
                    if(@$response == "success") {
                ?>
                    <p class="success">Email sent successfully</p>
                <?php
                    } else {
                ?>
                    <p class="error"><?php echo @$response; ?></p>
                <?php
                    }  
                ?>
            </form>
            
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const overlay = document.querySelector('.overlay');

            // Listen for scroll event
            window.addEventListener('scroll', function() {
                // Check if user has scrolled down
                if (window.scrollY > 0) {
                    overlay.classList.add('overlay-hidden'); // Hide the overlay
                } else {
                    overlay.classList.remove('overlay-hidden'); // Show the overlay
                }
            });
        });
    </script>



</body>
</html>