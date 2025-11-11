<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles1.css">
    <link rel="stylesheet" href="nav.css">
    <meta charset="UTF-8">
    <title>Eco-Hub</title>
    <script>
        window.addEventListener('scroll', function () {
            const stickyHeader = document.getElementById('sticky');
            const staticHeader = document.getElementById('static');
            const triggerPoint = staticHeader.offsetHeight;

            if (window.scrollY > triggerPoint) {
                stickyHeader.style.display = "flex";
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
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
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
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="products-and-services.php">Products and Services</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
            </ul>
        </nav>
        <div></div>
    </header>

    <div id="hero">
        <div id="overlay"></div>
        <div id="items">
            <img src="eco-hub logo text.png" height="150" width="150" alt="Eco-Hub logo text" />
            <h1>Packaging That Protects More Than Products —</h1><h1 id="highlight"> It Protects the Planet.</h1>
            <button onclick="window.location.href = 'about-us.php';">Discover Our Mission</button>
        </div>
    </div>

    <section id="padding">
        <section id="mission">
            <h2>Our Mission</h2>
            <p>
                At Eco-Hub, our mission is to revolutionize the packaging industry by providing innovative, sustainable, and eco-friendly packaging solutions. We are committed to helping businesses reduce their environmental footprint, enhance brand reputation, and achieve operational efficiency through responsible practices.
            </p>
            <button onclick="window.location.href = 'about-us.php';">Learn More About Us</button>
        </section>

        <section id="offerings">
            <h2>Our Sustainable Solutions</h2>
            <div class="product-list">
                <div class="product">
                    <img src="Recycled & Recyclable Corrugated Boxes.png" alt="Recycled Corrugated Boxes" class="product-image">
                    <h3>Recycled & Recyclable Corrugated Boxes</h3>
                    <p class="product-description">Durable and eco-friendly boxes made from recycled materials, perfect for safe and sustainable shipping.</p>

                </div>
                <div class="product">
                    <img src="Certified Compostable Mailer Bags.png" alt="Compostable Mailer Bags" class="product-image">
                    <h3>Certified Compostable Mailer Bags</h3>
                    <p class="product-description">Biodegradable mailers that return to nature, offering a guilt-free packaging option for your products.</p>

                </div>
                <div class="product">
                    <img src="Biodegradable & Water-Soluble Void Fill.png" alt="Biodegradable Void Fill" class="product-image">
                    <h3>Biodegradable & Water-Soluble Void Fill</h3>
                    <p class="product-description">Innovative void fill that dissolves in water, providing superior protection without the environmental cost.</p>

                </div>
            </div>
            <button onclick="window.location.href = 'products-and-services.php';" style="margin-top: 50px;">View All Products & Services</button>
        </section>

        <section id="trusted">
            <h2>Trusted By Industry Leaders</h2>
            <div class="trusted-logos">
                <span><img src="ups.png" hight="150" width="150" /></span>
                <span><img src="fedex.png" hight="150" width="150" alt="FedEx"/></span>
                <span><img src="dhl.png" hight="150" width="150" /></span>
                <span><img src="amazon.png" hight="150" width="150" /></span>
                <span><img src="target.png" hight="150" width="150" /></span>
            </div>
        </section>

        <section id="testimonials">
            <h2>What Our Clients Say</h2>
            <div class="testimonial-list">
                <div class="testimonial">"Eco-Hub transformed our packaging strategy! Their compostable mailers are fantastic, aligning perfectly with our brand's green initiatives. Highly recommended!"<span>- Jane D., Founder of GreenGoods</span></div>
                <div class="testimonial">"We've significantly reduced our shipping costs and environmental impact thanks to Eco-Hub's sustainable solutions. Their team is incredibly knowledgeable and supportive."<span>- Mark S., Operations Manager at SwiftCycle</span></div>
                <div class="testimonial">"Finding truly recyclable packaging that also looks professional was a challenge until we found Eco-Hub. Their corrugated boxes are top-notch and our customers love them."<span>- Emily R., CEO of Earthy Treats Bakery</span></div>
            </div>
            <button onclick="window.location.href = 'contact-us.php';" style="margin-top: 50px;">Get Your Custom Solution</button>
        </section>
    </section>
    <footer>
        <div class="copyright">All rights reserved © 2023 Eco-Hub</div>
        <a href="#">privacy policy</a>
        <a href="#">terms and conditions</a>
    </footer>

</body>
</html>