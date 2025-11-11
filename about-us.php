<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="nav.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Eco-Hub</title>
    <script>
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
                <li><a href="home.php" >Home</a></li>
                <li><a href="about-us.php" class="active">About Us</a></li>
                <li><a href="products-and-services.php">Products and Services</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
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
                <li><a href="home.php" >Home</a></li>
                <li><a href="about-us.php" class="active">About Us</a></li>
                <li><a href="products-and-services.php">Products and Services</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
            </ul>
        </nav>
        <div></div>
    </header>

    <main id="about-page-content">
        <section class="page-title">
            <h1>About Us</h1>
        </section>

        <section id="our-story" class="content-block center-text">
            <h2>Our Story</h2>
            <div class="story-container">
                <p>
                    Eco-Hub was founded on the belief that sustainability shouldn't be a luxury, but an accessible choice for every business. Born from a passion for protecting our planet, our journey began by meticulously researching and connecting with innovative eco-friendly packaging manufacturers worldwide. We recognized the growing challenge businesses faced in transitioning away from traditional, environmentally harmful materials and set out to build a bridge – a central hub where quality, sustainable packaging solutions are not just found, but understood and easily integrated. Our story is one of commitment to a greener future, fostering a community where businesses thrive responsibly.
                </p>
            </div>
        </section>

        <section id="what-we-do" class="content-block">
            <h2>What We Do</h2>
            <div class="alternating-content">
                <div class="text-card yellow-bg">
                    <h3>Connecting You to Sustainable Solutions</h3>
                    <p>
                        We meticulously vet and onboard a diverse range of eco-friendly packaging suppliers, ensuring they meet stringent environmental and quality standards. Our platform simplifies the search, allowing you to filter by material, application, and certifications, saving you valuable time and resources.
                    </p>
                </div>
                <div class="image-placeholder">
                    <img src="consus.png" alt="Sustainable packaging example">
                </div>

                <div class="image-placeholder">
                    <img src="ecomat.png" alt="Eco-friendly materials">
                </div>
                <div class="text-card yellow-bg">
                    <h3>Empowering Informed Decisions</h3>
                    <p>
                        Beyond merely listing products, Eco-Hub provides comprehensive information and resources. Understand the lifecycle of materials, compare environmental impacts, and gain insights into the latest innovations in green packaging to make the best choices for your brand and the planet.
                    </p>
                </div>

                <div class="text-card yellow-bg">
                    <h3>Streamlining Your Supply Chain</h3>
                    <p>
                        Our integrated tools facilitate direct inquiries, sample requests, and seamless communication with suppliers. We aim to remove the complexities of sourcing, allowing you to efficiently integrate eco-friendly packaging into your operations without compromising on efficiency or cost-effectiveness.
                    </p>
                </div>
                <div class="image-placeholder">
                    <img src="strsup.png" alt="Global supply chain for green packaging" height="100">
                </div>
            </div>
        </section>

        <section id="our-values" class="content-block center-text yellow-bg">
            <h2>Our Core Values</h2>
            <div class="values-grid">
                <div class="value-item">
                    <h3>Sustainability First</h3>
                    <p>Every decision is guided by our commitment to environmental responsibility.</p>
                </div>
                <div class="value-item">
                    <h3>Innovation Driven</h3>
                    <p>We champion cutting-edge packaging solutions that redefine industry standards.</p>
                </div>
                <div class="value-item">
                    <h3>Transparency Always</h3>
                    <p>Providing clear, honest information about products and their impact.</p>
                </div>
                <div class="value-item">
                    <h3>Community Focused</h3>
                    <p>Building a network where businesses and suppliers grow together sustainably.</p>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <div class="copyright">All rights reserved © 2023 Eco-Hub</div>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms and Conditions</a>
    </footer>

</body>
</html>