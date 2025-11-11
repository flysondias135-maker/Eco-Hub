<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="styles3.css">
    <link rel="stylesheet" href="styles4.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Eco-Hub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <script>
        window.addEventListener('scroll', function () {
            const stickyHeader = document.getElementById('sticky');
            const staticHeader = document.getElementById('static');
            const triggerPoint = staticHeader ? staticHeader.offsetHeight : 0;

            if (window.scrollY > triggerPoint) {
                stickyHeader.style.display = 'flex';
            } else {
                stickyHeader.style.display = 'none';
            }
        });
    </script>
</head>
<body>

    <header id="static">
        <div id="logo"><a href="home.php"><img src="eco-hub logo.webp" height="70" width="70" alt="Eco-Hub Logo" /></a></div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="products-and-services.php">Products and Services</a></li>
                <li><a href="contact-us.php" class="active">Contact Us</a></li>
            </ul>
        </nav>
        <div>
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
            // User is logged in, display username and a logout link
            echo '<span style="color: white; font-weight: bold; margin-right: 15px;">Welcome, ' . htmlspecialchars($_SESSION['username']) . '!</span>';
            echo '<a href="logout.php" id="sign">Logout</a>';
            } else {
            // User is not logged in, display Login/Sign-up button
            echo '<a href="login.php" id="sign">Login/Sign-up</a>';
            }
            ?>
        </div>
    </header>
    <header id="sticky">
        <div id="logo"><a href="home.php"><img src="eco-hub logo.webp" height="60" width="60" alt="Eco-Hub Logo" /></a></div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="products-and-services.php">Products and Services</a></li>
                <li><a href="contact-us.php" class="active">Contact Us</a></li>
            </ul>
        </nav>
        <div></div>
    </header>

    <main id="contact-us-page">
        <section class="page-title">
            <h1>Get in Touch</h1>
            <p class="subtitle">We'd love to hear from you. Whether you have a question about our products, need a custom solution, or just want to chat about sustainability, our team is ready to assist.</p>
        </section>

        
            <section class="our-details-section" style="padding: 60px 20px; text-align: center; background-color: #fcfcfc;">
                <h2 style="font-size: 2.8rem; color: #2E7D32; margin-bottom: 50px;">Our Details</h2>

                <div class="detail-cards-container" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 30px;">

                    <div class="detail-card" style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); width: 300px; text-align: center;">
                        <i class="fa-solid fa-location-dot" style="font-size: 3.5rem; color: #7CB342; margin-bottom: 20px;"></i>
                        <h3 style="font-size: 1.8rem; color: #2E7D32; margin-bottom: 15px;">Visit Us</h3>
                        <p style="font-size: 1.1rem; color: #555; line-height: 1.5;">Pccce,<br>Verna, Goa</p>
                    </div>

                    <div class="detail-card" style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); width: 300px; text-align: center;">
                        <i class="fa-solid fa-phone" style="font-size: 3.5rem; color: #7CB342; margin-bottom: 20px;"></i>
                        <h3 style="font-size: 1.8rem; color: #2E7D32; margin-bottom: 15px;">Call Us</h3>
                        <p style="font-size: 1.1rem; color: #555;">Phone: +91 9209053289</p>
                    </div>

                    <div class="detail-card" style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); width: 300px; text-align: center;">
                        <i class="fa-solid fa-envelope" style="font-size: 3.5rem; color: #7CB342; margin-bottom: 20px;"></i>
                        <h3 style="font-size: 1.8rem; color: #2E7D32; margin-bottom: 15px;">Email Us</h3>
                        <p style="font-size: 1.1rem; color: #555;">
                            <a href="mailto:info@ecohub.com" style="color: #7CB342; text-decoration: none;">info@ecohub.com</a><br>
                            <a href="mailto:support@ecohub.com" style="color: #7CB342; text-decoration: none;">support@ecohub.com</a>
                        </p>
                    </div>

                </div>
            </section>
        
        <?php
        if (isset($_SESSION['contact_message'])) {
        $class = ($_SESSION['contact_status'] == 'success') ? 'success' : 'error';
        echo '<div class="message ' . $class . '">' . $_SESSION['contact_message'] . '</div>';
        unset($_SESSION['contact_message']);
        unset($_SESSION['contact_status']);
        }
        ?>

        <section id="contact-form-section" class="content-block yellow-bg">
            <h2 class="center-text">Send Us a Message</h2>
            <form action="contact_submit.php" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject (Optional):</label>
                    <input type="text" id="subject" name="subject">
                </div>
                <div class="form-group">
                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="primary-button large-button">Send Message</button>
            </form>
        </section>

        <section id="map-section" class="content-block">
            <h2 class="center-text">Find Our Location</h2>
            <div class="map-placeholder">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.9130657669243!2d73.93099707512053!3d15.32695888525009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfb6d4f1f6451d%3A0x5aa42df33ac41f6!2sPadre%20Conceicao%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1763024671096!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
        </section>

    </main>

    <footer>
        <div class="copyright">All rights reserved © 2023 Eco-Hub</div>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms and Conditions</a>
    </footer>

</body>
</html>