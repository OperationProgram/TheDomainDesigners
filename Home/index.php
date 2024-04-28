<?php require("../scripts/sendMail.php"); ?>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $valid = false;
        $email = $_POST['email'];
        $lname = $_POST['lname'];
        $message = $_POST['message'];

        if(empty($email) || empty($lname) || empty($message)){
            $response = "All fields are required";
        } 
        
        else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            // Sanitize email address
            $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
            $valid = true;
        } 
        else {
            $response = "Invalid email";
        }
        
        if ($valid) {
            $sanitizedName = filter_var($lname, FILTER_SANITIZE_STRING);
            $sanitizedMessage = filter_var($message, FILTER_SANITIZE_STRING);
            
            $response = sendMail(['email' => $sanitizedEmail, 
                                'lname' => $_POST['lname'],
                                'message' =>  $_POST['message']
                                ]);
        }
 
        echo '<script>window.location = "#contact_form";</script>';
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development Site</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../Navigation/nav-bar.css">
    <link rel="stylesheet" href="../Footer/footer.css">
</head>
<body>
    <header>
        <script src="../scripts/navigationLoader.js"></script>
    </header>


    <main class="main">
        <video autoplay loop muted playsinline class="video">
            <source src="../assets/newvid.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <section class="section section__hero" id="section-hero">

            <div class="hero-content">
                <h1 class="hero-content__title">EMPOWERING YOUR VISION</h1>
                <p class="hero-content__description">Don't let your <span id="dynamic-word">innovative ideas</span> gather dust. Let us bring them to life.</p>
                <a href="#section-services" class="cta-button cta-button--primary" id="dynamic-cta">Get Started</a>
            </div>

            <script src="../scripts/updateCTA.js"></script>
            
            
        </section>
        

        
        <section class="section section__workflow" id="section-workflow">
            <div class="clickable-sections">
                <a href="/Workflow/workflow.html#workflow-design" class="clickable-section design">
                    <h2>DESIGN</h2>
                    <p class="section-description">Starting a design project can feel overwhelming, but it's important to remember that every great design began with a single idea. Whether you're feeling stuck or just in need of fresh inspiration, we're here to help. Drawing from our experience, we've developed effective strategies to tackle even the toughest design challenges.</p>
                </a>
    
                <a href="/Workflow/workflow.html#workflow-development" class="clickable-section develop">
                    <h2>DEVELOP</h2>
                    <p class="section-description">Having a vision is crucial, but bringing it to life requires skill and expertise. With our proven track record of real-world success, we're like the finishing touch to your masterpiece. Don't let technical hurdles hold you back – let us be the catalyst for turning your ideas into reality.</p>
                </a>
    
                <a href="/Workflow/workflow.html#workflow-deliver" class="clickable-section deliver">
                    <h2>DELIVER</h2>
                    <p class="section-description">Launching a project can be daunting, but with the right strategy, success is within reach. From comprehensive SEO tactics to cutting-edge marketing techniques, we've got the tools and knowledge to ensure your launch is a resounding success. Let's work together to propel your project to new heights.</p>
                </a>
            </div>
        </section>


        <section class="section company-section">
            <div class="company-container">
                <div class="company-content">
                    <div class="company-image">
                        <img src="../assets/company-image-transparent.png" alt="Company Image">
                    </div>
                    <div class="company-text">
                        <h2>About Our Company</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet est sit amet nulla eleifend ultricies. Phasellus ac aliquam eros. Integer vitae consequat lacus. Nulla facilisi. Mauris nec ligula vestibulum, tincidunt turpis sit amet, scelerisque mi.</p>
                        <p>Nullam vitae ex ac nisl suscipit blandit. Aliquam pharetra nulla quis ipsum feugiat, nec lobortis sapien cursus. Aenean venenatis enim ut turpis euismod, vel dignissim neque dictum. Proin hendrerit, quam id feugiat luctus, ligula sapien luctus nisl, sit amet volutpat libero magna sit amet lorem.</p>
                        <p>Nunc maximus lectus id nulla finibus volutpat. Donec nec risus sit amet mi congue mattis id vel lacus. Proin nec eleifend elit. Sed vehicula diam vel dictum malesuada.</p>
                    </div>
                    <div class="company-border">

                    </div>
                </div>
            </div>
        </section>
        
        <section class="section team-section">
            <div class="team-container">
                <div class="team-content">
                    <div class="team-image">
                        <img src="../assets/teamwork.jpg" alt="Team Image" loading="lazy">
                    </div>
                    <div class="team-text">
                        <h2>Meet Our Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet est sit amet nulla eleifend ultricies. Phasellus ac aliquam eros. Integer vitae consequat lacus. Nulla facilisi. Mauris nec ligula vestibulum, tincidunt turpis sit amet, scelerisque mi.</p>
                        <p>Nullam vitae ex ac nisl suscipit blandit. Aliquam pharetra nulla quis ipsum feugiat, nec lobortis sapien cursus. Aenean venenatis enim ut turpis euismod, vel dignissim neque dictum. Proin hendrerit, quam id feugiat luctus, ligula sapien luctus nisl, sit amet volutpat libero magna sit amet lorem.</p>
                        <p>Nunc maximus lectus id nulla finibus volutpat. Donec nec risus sit amet mi congue mattis id vel lacus. Proin nec eleifend elit. Sed vehicula diam vel dictum malesuada.</p>
                    </div>
                    <div class="team-border">
                        
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="contact-section">
                <div class="contact-container">
                    <h2>Contact Us</h2>
                    <form id="contact_form" action="" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="lname">
                            <img id="name_success" class="success_icon" src="../assets/green_check.svg" width="20" height="20">
                            <span id="name_error" class="error_msg">Field is Required</span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email">
                            <img id="email_success" class="success_icon" src="../assets/green_check.svg" width="20" height="20">
                            <span id="email_error" class="error_msg">e.g.   (<i>email@example.com</i>)</span>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message"></textarea>
                            <img id="message_success" class="success_icon" src="../assets/green_check.svg" width="20" height="20">
                            <span id="message_error" class="error_msg">Field is Required</span>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit">
                        </div>
                        <span id="form_error" class="error">There was a problem submitting the form. <br />
                                                Check the fields for errors.</span>

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
                    <div id="spinner_overlay" class="spinner-overlay">
                        <div class="spinner"></div>
                    </div>
                    <script type="module" src="../scripts/homeContactForm.js"></script>
                    
                </div>
            </div>
        </section>

    <section>
        <div class="banner-live-counter">
            <div class="banner-counter-wrapper">
                <div class="banner-counter-item">
                    <h3>Hours Invested</h3>
                    <p class="banner-counter" data-target="1000">0</p>
                </div>
                
                <div class="banner-counter-item">
                    <h3>Web Projects</h3>
                    <p class="banner-counter" data-target="50">0</p>
                </div>
                <div class="banner-counter-item">
                    <h3># Visited</h3>
                    <p class="banner-counter" data-target="10000">0</p>
                </div>
            </div>
        </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const counters = document.querySelectorAll('.banner-counter');
                    const speed = 200; // The lower the slower

                    counters.forEach(counter => {
                        const updateCount = () => {
                            const target = +counter.getAttribute('data-target');
                            const count = +counter.innerText;

                            const inc = target / speed;

                            if (count < target) {
                                counter.innerText = Math.ceil(count + inc);
                                setTimeout(updateCount, 1);
                            } else {
                                counter.innerText = target;
                            }
                        };

                        updateCount();
                    });
                });
            </script>
        </section>



        <section class="section section__testimonials" id="section-testimonials">
            <div class="testimonial-container">
                <div class="testimonial-title">
                    <h2>Testimonials</h2>
                </div>
                <div class="testimonial-slider">
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
                            <cite>- John Doe</cite>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <p>"Suspendisse potenti. Ut pretium tellus sit amet nunc aliquet euismod. Praesent accumsan lorem ut velit ullamcorper, nec commodo nunc feugiat. Praesent fermentum vehicula tellus, sit amet laoreet ligula feugiat eget."</p>
                            <cite>- Jane Smith</cite>
                        </div>
                    </div>
                    
                </div>
            </div>
            <script src="../scripts/testimonialController.js"></script>
        </section>

    </main>

    <footer class="footer">
        <script src="../scripts/footerLoader.js"></script>
    </footer>

</body>
</html>