<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles3.css">
    <link rel="stylesheet" href="nav.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products & Services - Eco-Hub</title>
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
                <li><a href="home.php">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="products-and-services.php" class="active">Products and Services</a></li>
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
                <li><a href="home.php">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="products-and-services.php" class="active">Products and Services</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
            </ul>
        </nav>
        <div></div>
    </header>

    <main id="products-services-page">
        <section class="page-title">
            <h1>Our Sustainable Solutions</h1>
            <p class="subtitle">Discover our comprehensive range of eco-friendly packaging and expert services, all designed to champion your brand's sustainability journey.</p>
        </section>

        <section id="packaging-products-list" class="content-block">
            <h2>Eco-Friendly Packaging Products</h2>
            <div class="product-grid">
                <div class="product-item">
                    <img src="Recycled & Recyclable Corrugated Boxes.png" alt="Recycled Cardboard Boxes">
                    <h3>Recycled & Recyclable Corrugated Boxes</h3>
                    <p>Robust and versatile, our corrugated boxes are crafted from 100% post-consumer recycled content, ensuring complete recyclability and superior product protection.</p>
                </div>
                <div class="product-item">
                    <img src="Certified Compostable Mailer Bags.png" alt="Compostable Mailers">
                    <h3>Certified Compostable Mailer Bags</h3>
                    <p>Ship guilt-free with our plant-based, biodegradable mailers. Designed for secure transit, they fully decompose in home or industrial compost environments.</p>
                </div>
                <div class="product-item">
                    <img src="Biodegradable & Water-Soluble Void Fill.png" alt="Biodegradable Void Fill">
                    <h3>Biodegradable & Water-Soluble Void Fill</h3>
                    <p>Protect your products with our innovative starch-based packing peanuts and recycled paper void fill, offering excellent cushioning that's easily disposable.</p>
                </div>
                <div class="product-item">
                    <img src="Recyclable Flexible Pouches & Bags.png" alt="Recyclable Flexible Pouches">
                    <h3>Recyclable Flexible Pouches & Bags</h3>
                    <p>Sustainable alternatives for food, beverage, and retail. Our flexible pouches are designed for recyclability, offering extended shelf-life and reduced material use.</p>
                </div>
                <div class="product-item">
                    <img src="Water-Activated Paper Tape.png" alt="Water-Activated Paper Tape">
                    <h3>Water-Activated Paper Tape</h3>
                    <p>Seal your packages securely and sustainably. Our paper tape is recyclable along with the box, offering superior adhesion and tamper-evident security.</p>
                </div>
                <div class="product-item">
                    <img src="Labels & Stickers (Recycled Content).png" alt="Recycled Content Labels">
                    <h3>Labels & Stickers (Recycled Content)</h3>
                    <p>From product branding to shipping, our labels are made with recycled materials and eco-friendly adhesives, maintaining quality and performance.</p>
                </div>
            </div>
            <div class="contact-prompt center-text">
                <p>Don't see what you're looking for? Our custom sourcing team can help find the perfect solution for you.</p>
                <a href="contact-us.php" class="primary-button">Inquire About Custom Products</a>
            </div>
        </section>

        <section id="sustainability-services-list" class="content-block yellow-bg">
            <h2>Our Sustainability Services</h2>
            <div class="service-grid">
                <div class="service-item-full">
                    <img src="Packaging Sustainability Consulting.png" alt="Packaging Sustainability Consulting">
                    <h3>Packaging Sustainability Consulting</h3>
                    <p>Our experts provide a deep dive into your current packaging, offering tailored recommendations for material reduction, lifecycle optimization, and carbon footprint analysis. From initial audit to strategic implementation, we guide you towards verifiable sustainability goals.</p>
                </div>
                <div class="service-item-full">
                    <img src="Eco-Packaging Design & Prototyping.png" alt="Eco-Packaging Design and Prototyping">
                    <h3>Eco-Packaging Design & Prototyping</h3>
                    <p>Collaborate with our design team to create innovative, functional, and visually compelling sustainable packaging. We focus on design for recyclability, compostability, and reusability, turning your eco-vision into tangible, market-ready prototypes.</p>
                </div>
                <div class="service-item-full">
                    <img src="Eco-Certification & Compliance Assistance.png" alt="Eco-Certification Assistance">
                    <h3>Eco-Certification & Compliance Assistance</h3>
                    <p>Navigating the complex landscape of eco-certifications (e.g., FSC, OK Compost, B Corp) can be challenging. We offer specialized support to help your products and processes meet international environmental standards and gain credible recognition.</p>
                </div>
                <div class="service-item-full">
                    <img src="Sustainable Supply Chain Optimization.png" alt="Sustainable Supply Chain Optimization">
                    <h3>Sustainable Supply Chain Optimization</h3>
                    <p>Beyond packaging, we assist in streamlining your entire supply chain to reduce environmental impact. This includes optimizing logistics, sourcing ethical raw materials, and implementing waste reduction programs throughout your operations.</p>
                </div>
            </div>
            <div class="contact-prompt center-text">
                <p>Ready to transform your business's sustainability? Let's discuss how our services can empower you.</p>
                <a href="contact-us.php" class="primary-button">Schedule a Consultation</a>
            </div>
        </section>

        <section id="how-we-help" class="content-block center-text">
            <h2>The Eco-Hub Advantage</h2>
            <div class="benefits-grid">
                <div class="benefit-item">
                    <img src="Minimize Environmental Impact.png" alt="Reduce Waste icon">
                    <h3>Minimize Environmental Impact</h3>
                    <p>Lower your carbon footprint and reduce waste with packaging solutions designed for a circular economy.</p>
                </div>
                <div class="benefit-item">
                    <img src="Enhance Brand Reputation.png" alt="Boost Brand Image icon">
                    <h3>Enhance Brand Reputation</h3>
                    <p>Meet consumer demand for sustainability, build loyalty, and position your brand as an eco-conscious leader.</p>
                </div>
                <div class="benefit-item">
                    <img src="Optimize Costs & Efficiency.png" alt="Cost Efficiency icon">
                    <h3>Optimize Costs & Efficiency</h3>
                    <p>Discover innovative materials and optimized designs that can lead to significant savings in packaging and logistics.</p>
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